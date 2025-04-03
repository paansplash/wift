<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Services\Admin\CategoryService;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CategoryController extends AppBaseController
{
    /** @var CategoryService $categoryService*/
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the Category.
     */
    public function index(Request $request)
    {
        $categories = $this->categoryService->getPaginatedCategories();

        return view('pages.admin.categories.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new Category.
     */
    public function create()
    {
        $statuses = $this->categoryService->getAllStatuses();
        return view('pages.admin.categories.create')
            ->with('statuses', $statuses);
    }

    /**
     * Store a newly created Category in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        $category = $this->categoryService->createCategory($request->all());

        Flash::success('Category saved successfully.');

        return redirect(route('admin.categories.index'));
    }

    /**
     * Display the specified Category.
     */
    public function show($id)
    {
        $category = $this->categoryService->getCategory($id);

        if (empty($category)) {
            Flash::error('Category not found');
            return redirect(route('admin.categories.index'));
        }

        return view('pages.admin.categories.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified Category.
     */
    public function edit($id)
    {
        $category = $this->categoryService->getCategory($id);
        $statuses = $this->categoryService->getAllStatuses();

        if (empty($category)) {
            Flash::error('Category not found');
            return redirect(route('admin.categories.index'));
        }

        return view('pages.admin.categories.edit')
            ->with('category', $category)
            ->with('statuses', $statuses);
    }

    /**
     * Update the specified Category in storage.
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        $category = $this->categoryService->updateCategory($id, $request->all());

        if (empty($category)) {
            Flash::error('Category not found');
            return redirect(route('admin.categories.index'));
        }

        Flash::success('Category updated successfully.');
        return redirect(route('admin.categories.index'));
    }

    /**
     * Remove the specified Category from storage.
     */
    public function destroy($id)
    {
        $result = $this->categoryService->deleteCategory($id);

        if (!$result) {
            Flash::error('Category not found');
            return redirect(route('admin.categories.index'));
        }

        Flash::success('Category deleted successfully.');
        return redirect(route('admin.categories.index'));
    }
}
