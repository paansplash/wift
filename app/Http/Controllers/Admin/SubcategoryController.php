<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Services\Admin\SubcategoryService;
use App\Services\Admin\CategoryService;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class SubcategoryController extends AppBaseController
{
    /** @var SubcategoryService $subcategoryService*/
    private $subcategoryService;
    /** @var CategoryService $categoryService*/
    private $categoryService;

    public function __construct(SubcategoryService $subcategoryService, CategoryService $categoryService)
    {
        $this->subcategoryService = $subcategoryService;
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the Subcategory.
     */
    public function index(Request $request)
    {
        $subcategories = $this->subcategoryService->getPaginatedSubcategories();

        return view('pages.admin.subcategories.index')
            ->with('subcategories', $subcategories);
    }

    /**
     * Show the form for creating a new Subcategory.
     */
    public function create()
    {
        $categories = $this->categoryService->getAllCategoriesForDropdown();
        $statuses = $this->subcategoryService->getAllStatuses();
        return view('pages.admin.subcategories.create', compact('categories', 'statuses'));
    }

    /**
     * Store a newly created Subcategory in storage.
     */
    public function store(CreateSubcategoryRequest $request)
    {
        $subcategory = $this->subcategoryService->createSubcategory($request->all());

        Flash::success('Subcategory saved successfully.');

        return redirect(route('admin.subcategories.index'));
    }

    /**
     * Display the specified Subcategory.
     */
    public function show($id)
    {
        $subcategory = $this->subcategoryService->getSubcategory($id);

        if (empty($subcategory)) {
            Flash::error('Subcategory not found');
            return redirect(route('admin.subcategories.index'));
        }

        return view('pages.admin.subcategories.show')->with('subcategory', $subcategory);
    }

    /**
     * Show the form for editing the specified Subcategory.
     */
    public function edit($id)
    {
        $subcategory = $this->subcategoryService->getSubcategory($id);
        $categories = $this->categoryService->getAllCategoriesForDropdown();
        $statuses = $this->subcategoryService->getAllStatuses();

        if (empty($subcategory)) {
            Flash::error('Subcategory not found');
            return redirect(route('admin.subcategories.index'));
        }

        return view('pages.admin.subcategories.edit', compact('categories', 'subcategory', 'statuses'));
    }

    /**
     * Update the specified Subcategory in storage.
     */
    public function update($id, UpdateSubcategoryRequest $request)
    {
        $subcategory = $this->subcategoryService->updateSubcategory($id, $request->all());

        if (empty($subcategory)) {
            Flash::error('Subcategory not found');
            return redirect(route('admin.subcategories.index'));
        }

        Flash::success('Subcategory updated successfully.');
        return redirect(route('admin.subcategories.index'));
    }

    /**
     * Remove the specified Subcategory from storage.
     */
    public function destroy($id)
    {
        $result = $this->subcategoryService->deleteSubcategory($id);

        if (!$result) {
            Flash::error('Subcategory not found');
            return redirect(route('admin.subcategories.index'));
        }

        Flash::success('Subcategory deleted successfully.');
        return redirect(route('admin.subcategories.index'));
    }
}
