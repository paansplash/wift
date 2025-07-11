<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateWisherRequest;
use App\Http\Requests\UpdateWisherRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UserRepository;
use App\Repositories\WisherRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class WisherController extends AppBaseController
{
    /** @var WisherRepository $wisherRepository*/
    private $wisherRepository;
    private $userRepository;

    public function __construct(WisherRepository $wisherRepo, UserRepository $userRepo)
    {
        $this->wisherRepository = $wisherRepo;
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the Wisher.
     */
    public function index(Request $request)
    {
        $wishers = $this->wisherRepository->paginate(10);

        return view('admin.wishers.index')
            ->with('wishers', $wishers);
    }

    /**
     * Show the form for creating a new Wisher.
     */
    public function create()
    {
        $users = $this->userRepository->getAllUsers();
        
        return view('admin.wishers.create', compact('users'));
    }

    /**
     * Store a newly created Wisher in storage.
     */
    public function store(CreateWisherRequest $request)
    {
        $input = $request->all();

        $wisher = $this->wisherRepository->create($input);

        Flash::success('Wisher saved successfully.');

        return redirect(route('admin.wishlists.create'));
    }

    /**
     * Display the specified Wisher.
     */
    public function show($id)
    {
        $wisher = $this->wisherRepository->find($id);

        if (empty($wisher)) {
            Flash::error('Wisher not found');

            return redirect(route('admin.wishers.index'));
        }

        return view('admin.wishers.show')->with('wisher', $wisher);
    }

    /**
     * Show the form for editing the specified Wisher.
     */
    public function edit($id)
    {
        $wisher = $this->wisherRepository->find($id);
        $users = $this->userRepository->getAllUsers();

        if (empty($wisher)) {
            Flash::error('Wisher not found');

            return redirect(route('admin.wishers.index'));
        }

        return view('admin.wishers.edit', compact('wisher','users'));
    }

    /**
     * Update the specified Wisher in storage.
     */
    public function update($id, UpdateWisherRequest $request)
    {
        $wisher = $this->wisherRepository->find($id);

        if (empty($wisher)) {
            Flash::error('Wisher not found');

            return redirect(route('admin.wishers.index'));
        }

        $wisher = $this->wisherRepository->update($request->all(), $id);

        Flash::success('Wisher updated successfully.');

        return redirect(route('admin.wishers.index'));
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

            return redirect(route('admin.wishers.index'));
        }

        $this->wisherRepository->delete($id);

        Flash::success('Wisher deleted successfully.');

        return redirect(route('admin.wishers.index'));
    }
}
