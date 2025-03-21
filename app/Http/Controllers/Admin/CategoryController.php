<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CategoryRepository;
use App\Repositories\StatusRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CategoryController extends AppBaseController
{
    /** @var CategoryRepository $categoryRepository*/
    private $categoryRepository;
    private $statusRepository;

    public function __construct(CategoryRepository $categoryRepo, StatusRepository $statusRepo)
    {
        $this->categoryRepository = $categoryRepo;
        $this->statusRepository = $statusRepo;
    }

    /**
     * Display a listing of the Category.
     */
    public function index(Request $request)
    {
        $categories = $this->categoryRepository->paginate(10);

        return view('pages.admin.categories.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new Category.
     */
    public function create()
    {
        $statuses = $this->statusRepository->getActivityStatuses();

        return view('pages.admin.categories.create', compact('statuses'));
    }

    /**
     * Store a newly created Category in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        $input = $request->all();

        $category = $this->categoryRepository->create($input);

        Flash::success('Category saved successfully.');

        return redirect(route('admin.categories.index'));
    }

    /**
     * Display the specified Category.
     */
    public function show($id)
    {
        $category = $this->categoryRepository->find($id);

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
        $category = $this->categoryRepository->find($id);
        $statuses = $this->statusRepository->getActivityStatuses();

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.categories.index'));
        }

        return view('pages.admin.categories.edit', compact('category', 'statuses'));
    }

    /**
     * Update the specified Category in storage.
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.categories.index'));
        }

        $category = $this->categoryRepository->update($request->all(), $id);

        Flash::success('Category updated successfully.');

        return redirect(route('admin.categories.index'));
    }

    /**
     * Remove the specified Category from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $category = $this->categoryRepository->find($id);

        if (empty($category)) {
            Flash::error('Category not found');

            return redirect(route('admin.categories.index'));
        }

        $this->categoryRepository->delete($id);

        Flash::success('Category deleted successfully.');

        return redirect(route('admin.categories.index'));
    }
}
