<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\CreateWisherRequest;
use App\Http\Requests\UpdateWisherRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\WisherRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class WisherController extends AppBaseController
{
    /** @var WisherRepository $wisherRepository*/
    private $wisherRepository;

    public function __construct(WisherRepository $wisherRepo)
    {
        $this->middleware('auth');
        $this->wisherRepository = $wisherRepo;
    }

    public function index(Request $request)
    {
        // Get latest wisher for the authenticated user
        $wisher = $this->wisherRepository->getWisherByUser();
        $wishlist = $wisher?->wishlist; // Get wishlist if exists

        return view('user.wishers', compact('wisher', 'wishlist'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:255',
            'addr1' => 'required|string|max:255',
            'addr2' => 'nullable|string|max:255',
            'addr3' => 'nullable|string|max:255',
            'postcode' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:65535',
        ]);

        try {
            // Check if the user already has a wisher record
            $existingWisher = $this->wisherRepository->getWisherByUser();

            if ($existingWisher) {
                $this->wisherRepository->updateWithWishlist($request->all(), $existingWisher->id);
                Flash::success('Wisher and Wishlist updated successfully.');
            } else {
                $this->wisherRepository->createWithWishlist($request->all());
                Flash::success('Wisher and Wishlist created successfully.');
            }

            return redirect()->route('user.wishlistItems.index');
        } catch (\Exception $e) {
            Flash::error('Failed to save: ' . $e->getMessage());
            return back()->withInput();
        }
    }

    /**
     * Display the specified Wisher.
     */
    public function show($id)
    {
        $wisher = $this->wisherRepository->find($id);

        if (empty($wisher)) {
            Flash::error('Wisher not found');

            return redirect(route('wishers.index'));
        }

        return view('admin.wishers.show')->with('wisher', $wisher);
    }

    /**
     * Show the form for editing the specified Wisher.
     */
    public function edit($id)
    {
        $wisher = $this->wisherRepository->find($id);

        if (empty($wisher)) {
            Flash::error('Wisher not found');

            return redirect(route('wishers.index'));
        }

        return view('admin.wishers.edit')->with('wisher', $wisher);
    }

    /**
     * Update the specified Wisher in storage.
     */
    public function update($id, UpdateWisherRequest $request)
    {
        $wisher = $this->wisherRepository->find($id);

        if (empty($wisher)) {
            Flash::error('Wisher not found');

            return redirect(route('wishers.index'));
        }

        $wisher = $this->wisherRepository->update($request->all(), $id);

        Flash::success('Wisher updated successfully.');

        return redirect(route('user.wishlists.index'));
    }

    /**
     * Remove the specified Wisher from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $wisher = $this->wisherRepository->find($id);

        if (empty($wisher)) {
            Flash::error('Wisher not found');

            return redirect(route('wishers.index'));
        }

        $this->wisherRepository->delete($id);

        Flash::success('Wisher deleted successfully.');

        return redirect(route('wishers.index'));
    }
}
