<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateWisherAPIRequest;
use App\Http\Requests\API\UpdateWisherAPIRequest;
use App\Models\Wisher;
use App\Repositories\WisherRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class WisherAPIController
 */
class WisherAPIController extends AppBaseController
{
    private WisherRepository $wisherRepository;

    public function __construct(WisherRepository $wisherRepo)
    {
        $this->wisherRepository = $wisherRepo;
    }

    /**
     * Display a listing of the Wishers.
     * GET|HEAD /wishers
     */
    public function index(Request $request): JsonResponse
    {
        $wishers = $this->wisherRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($wishers->toArray(), 'Wishers retrieved successfully');
    }

    /**
     * Store a newly created Wisher in storage.
     * POST /wishers
     */
    public function store(CreateWisherAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $wisher = $this->wisherRepository->create($input);

        return $this->sendResponse($wisher->toArray(), 'Wisher saved successfully');
    }

    /**
     * Display the specified Wisher.
     * GET|HEAD /wishers/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Wisher $wisher */
        $wisher = $this->wisherRepository->find($id);

        if (empty($wisher)) {
            return $this->sendError('Wisher not found');
        }

        return $this->sendResponse($wisher->toArray(), 'Wisher retrieved successfully');
    }

    /**
     * Update the specified Wisher in storage.
     * PUT/PATCH /wishers/{id}
     */
    public function update($id, UpdateWisherAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Wisher $wisher */
        $wisher = $this->wisherRepository->find($id);

        if (empty($wisher)) {
            return $this->sendError('Wisher not found');
        }

        $wisher = $this->wisherRepository->update($input, $id);

        return $this->sendResponse($wisher->toArray(), 'Wisher updated successfully');
    }

    /**
     * Remove the specified Wisher from storage.
     * DELETE /wishers/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Wisher $wisher */
        $wisher = $this->wisherRepository->find($id);

        if (empty($wisher)) {
            return $this->sendError('Wisher not found');
        }

        $wisher->delete();

        return $this->sendSuccess('Wisher deleted successfully');
    }
}
