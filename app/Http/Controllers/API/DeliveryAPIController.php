<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDeliveryAPIRequest;
use App\Http\Requests\API\UpdateDeliveryAPIRequest;
use App\Models\Delivery;
use App\Repositories\DeliveryRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class DeliveryAPIController
 */
class DeliveryAPIController extends AppBaseController
{
    private DeliveryRepository $deliveryRepository;

    public function __construct(DeliveryRepository $deliveryRepo)
    {
        $this->deliveryRepository = $deliveryRepo;
    }

    /**
     * Display a listing of the Deliveries.
     * GET|HEAD /deliveries
     */
    public function index(Request $request): JsonResponse
    {
        $deliveries = $this->deliveryRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($deliveries->toArray(), 'Deliveries retrieved successfully');
    }

    /**
     * Store a newly created Delivery in storage.
     * POST /deliveries
     */
    public function store(CreateDeliveryAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $delivery = $this->deliveryRepository->create($input);

        return $this->sendResponse($delivery->toArray(), 'Delivery saved successfully');
    }

    /**
     * Display the specified Delivery.
     * GET|HEAD /deliveries/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Delivery $delivery */
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            return $this->sendError('Delivery not found');
        }

        return $this->sendResponse($delivery->toArray(), 'Delivery retrieved successfully');
    }

    /**
     * Update the specified Delivery in storage.
     * PUT/PATCH /deliveries/{id}
     */
    public function update($id, UpdateDeliveryAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Delivery $delivery */
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            return $this->sendError('Delivery not found');
        }

        $delivery = $this->deliveryRepository->update($input, $id);

        return $this->sendResponse($delivery->toArray(), 'Delivery updated successfully');
    }

    /**
     * Remove the specified Delivery from storage.
     * DELETE /deliveries/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Delivery $delivery */
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            return $this->sendError('Delivery not found');
        }

        $delivery->delete();

        return $this->sendSuccess('Delivery deleted successfully');
    }
}
