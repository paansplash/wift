<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSubcategoryAPIRequest;
use App\Http\Requests\API\UpdateSubcategoryAPIRequest;
use App\Models\Subcategory;
use App\Repositories\SubcategoryRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class SubcategoryAPIController
 */
class SubcategoryAPIController extends AppBaseController
{
    private SubcategoryRepository $subcategoryRepository;

    public function __construct(SubcategoryRepository $subcategoryRepo)
    {
        $this->subcategoryRepository = $subcategoryRepo;
    }

    /**
     * Display a listing of the Subcategories.
     * GET|HEAD /subcategories
     */
    public function index(Request $request): JsonResponse
    {
        $subcategories = $this->subcategoryRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($subcategories->toArray(), 'Subcategories retrieved successfully');
    }

    /**
     * Store a newly created Subcategory in storage.
     * POST /subcategories
     */
    public function store(CreateSubcategoryAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $subcategory = $this->subcategoryRepository->create($input);

        return $this->sendResponse($subcategory->toArray(), 'Subcategory saved successfully');
    }

    /**
     * Display the specified Subcategory.
     * GET|HEAD /subcategories/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Subcategory $subcategory */
        $subcategory = $this->subcategoryRepository->find($id);

        if (empty($subcategory)) {
            return $this->sendError('Subcategory not found');
        }

        return $this->sendResponse($subcategory->toArray(), 'Subcategory retrieved successfully');
    }

    /**
     * Update the specified Subcategory in storage.
     * PUT/PATCH /subcategories/{id}
     */
    public function update($id, UpdateSubcategoryAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Subcategory $subcategory */
        $subcategory = $this->subcategoryRepository->find($id);

        if (empty($subcategory)) {
            return $this->sendError('Subcategory not found');
        }

        $subcategory = $this->subcategoryRepository->update($input, $id);

        return $this->sendResponse($subcategory->toArray(), 'Subcategory updated successfully');
    }

    /**
     * Remove the specified Subcategory from storage.
     * DELETE /subcategories/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Subcategory $subcategory */
        $subcategory = $this->subcategoryRepository->find($id);

        if (empty($subcategory)) {
            return $this->sendError('Subcategory not found');
        }

        $subcategory->delete();

        return $this->sendSuccess('Subcategory deleted successfully');
    }
}
