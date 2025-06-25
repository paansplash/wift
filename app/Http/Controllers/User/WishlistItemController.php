<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\CreateWishlistItemRequest;
use App\Http\Requests\UpdateWishlistItemRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\InventoryRepository;
use App\Repositories\StatusRepository;
use App\Repositories\WishlistItemRepository;
use App\Repositories\WishlistRepository;
use App\Repositories\SubcategoryRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Log;

class WishlistItemController extends AppBaseController
{
    /** @var WishlistItemRepository $wishlistItemRepository*/
    private $wishlistItemRepository;
    private $wishlistRepository;
    private $inventoryRepository;
    private $statusRepository;
    private $subcategoryRepository;
    private $categoryRepository;

    public function __construct(
        WishlistItemRepository $wishlistItemRepo,
        WishlistRepository $wishlistRepo,
        InventoryRepository $inventoryRepo,
        StatusRepository $statusRepo,
        SubcategoryRepository $subcategoryRepo,
        CategoryRepository $categoryRepo
    ) {
        $this->middleware('auth'); // Ensure the user is authenticated

        $this->wishlistItemRepository = $wishlistItemRepo;
        $this->wishlistRepository = $wishlistRepo;
        $this->inventoryRepository = $inventoryRepo;
        $this->statusRepository = $statusRepo;
        $this->subcategoryRepository = $subcategoryRepo;
        $this->categoryRepository = $categoryRepo;
    }

    /**
     * Display a listing of the WishlistItem.
     */
    public function index(Request $request)
    {
        $query = $this->inventoryRepository->allQuery()
            ->with(['subcategory', 'user', 'status']);

        // Apply search filter
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('name', 'like', "%{$search}%");
        }

        // Apply category filter
        if ($request->has('category') && $request->get('category')) {
            $query->whereHas('subcategory', function ($q) use ($request) {
                $q->where('category_id', $request->get('category'));
            });
        }

        // Apply subcategory filter
        if ($request->has('subcategory') && $request->get('subcategory')) {
            $query->where('subcategory_id', $request->get('subcategory'));
        }

        // Apply sorting
        if ($request->has('sort')) {
            switch ($request->get('sort')) {
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'name_asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('name', 'desc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $inventories = $query->paginate(12);
        $wishlist = $this->wishlistRepository->getLatestWishlist();
        $categories = $this->categoryRepository->all();
        $subcategories = $this->subcategoryRepository->all();

        return view('user.wishlist_items', compact('inventories', 'wishlist', 'categories', 'subcategories'));
    }

    /**
     * Show the form for creating a new WishlistItem.
     */
    public function create()
    {
        return view('user.wishlist_items.create');
    }

    /**
     * Store a newly created WishlistItem in storage.
     */
    public function store(CreateWishlistItemRequest $request)
    {
        try {
            if ($request->filled('wishlist_id')) {
                $this->wishlistItemRepository->addToWishlist($request->wishlist_id, $request->inventory_id);
            } else {
                $this->wishlistItemRepository->addToLatestUserWishlist($request->inventory_id);
            }
            Flash::success('Item added to wishlist successfully.');
        } catch (\Exception $e) {
            Log::error('Wishlist insert error', ['error' => $e->getMessage()]);
            Flash::error($e->getMessage());
        }
    
        return redirect()->back();
    }


    /**
     * Display the specified WishlistItem.
     */
    public function show($id)
    {
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            Flash::error('Wishlist Item not found');

            return redirect(route('user.wishlistItems.index'));
        }

        return view('admin.wishlist_items.show')->with('wishlistItem', $wishlistItem);
    }

    /**
     * Show the form for editing the specified WishlistItem.
     */
    public function edit($id)
    {
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            Flash::error('Wishlist Item not found');

            return redirect(route('user.wishlistItems.index'));
        }

        return view('admin.wishlist_items.edit')->with('wishlistItem', $wishlistItem);
    }

    /**
     * Update the specified WishlistItem in storage.
     */
    public function update($id, UpdateWishlistItemRequest $request)
    {
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            Flash::error('Wishlist Item not found');

            return redirect(route('user.wishlistItems.index'));
        }

        $wishlistItem = $this->wishlistItemRepository->update($request->all(), $id);

        Flash::success('Wishlist Item updated successfully.');

        return redirect(route('user.wishlistItems.index'));
    }

    /**
     * Remove the specified WishlistItem from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $wishlistItem = $this->wishlistItemRepository->find($id);

        if (empty($wishlistItem)) {
            Flash::error('Wishlist Item not found');

            return redirect(route('user.wishlistItems.index'));
        }

        $this->wishlistItemRepository->delete($id);

        Flash::success('Wishlist Item deleted successfully.');

        return redirect(route('user.wishlistItems.index'));
    }
}
