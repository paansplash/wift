<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SubcategoryRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class SubcategoryController extends AppBaseController
{
    /** @var SubcategoryRepository $subcategoryRepository*/
    private $subcategoryRepository;

    public function __construct(SubcategoryRepository $subcategoryRepo)
    {
        $this->subcategoryRepository = $subcategoryRepo;
    }

    /**
     * Display a listing of the Subcategory.
     */
    public function index(Request $request)
    {
        $subcategories = $this->subcategoryRepository->paginate(10);

        return view('pages.admin.subcategories.index')
            ->with('subcategories', $subcategories);
    }

    /**
     * Show the form for creating a new Subcategory.
     */
    public function create()
    {
        return view('pages.admin.subcategories.create');
    }

    /**
     * Store a newly created Subcategory in storage.
     */
    public function store(CreateSubcategoryRequest $request)
    {
        $input = $request->all();

        $subcategory = $this->subcategoryRepository->create($input);

        Flash::success('Subcategory saved successfully.');

        return redirect(route('subcategories.index'));
    }

    /**
     * Display the specified Subcategory.
     */
    public function show($id)
    {
        $subcategory = $this->subcategoryRepository->find($id);

        if (empty($subcategory)) {
            Flash::error('Subcategory not found');

            return redirect(route('subcategories.index'));
        }

        return view('pages.admin.subcategories.show')->with('subcategory', $subcategory);
    }

    /**
     * Show the form for editing the specified Subcategory.
     */
    public function edit($id)
    {
        $subcategory = $this->subcategoryRepository->find($id);

        if (empty($subcategory)) {
            Flash::error('Subcategory not found');

            return redirect(route('subcategories.index'));
        }

        return view('pages.admin.subcategories.edit')->with('subcategory', $subcategory);
    }

    /**
     * Update the specified Subcategory in storage.
     */
    public function update($id, UpdateSubcategoryRequest $request)
    {
        $subcategory = $this->subcategoryRepository->find($id);

        if (empty($subcategory)) {
            Flash::error('Subcategory not found');

            return redirect(route('subcategories.index'));
        }

        $subcategory = $this->subcategoryRepository->update($request->all(), $id);

        Flash::success('Subcategory updated successfully.');

        return redirect(route('subcategories.index'));
    }

    /**
     * Remove the specified Subcategory from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subcategory = $this->subcategoryRepository->find($id);

        if (empty($subcategory)) {
            Flash::error('Subcategory not found');

            return redirect(route('subcategories.index'));
        }

        $this->subcategoryRepository->delete($id);

        Flash::success('Subcategory deleted successfully.');

        return redirect(route('subcategories.index'));
    }
}
