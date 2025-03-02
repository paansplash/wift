<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateDeliveryRequest;
use App\Http\Requests\UpdateDeliveryRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\DeliveryRepository;
use App\Repositories\StatusRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class DeliveryController extends AppBaseController
{
    /** @var DeliveryRepository $deliveryRepository*/
    private $deliveryRepository;
    private $statusRepository;

    public function __construct(DeliveryRepository $deliveryRepo, StatusRepository $statusRepo)
    {
        $this->deliveryRepository = $deliveryRepo;
        $this->statusRepository = $statusRepo;
    }

    /**
     * Display a listing of the Delivery.
     */
    public function index(Request $request)
    {
        $deliveries = $this->deliveryRepository->paginate(10);

        return view('pages.admin.deliveries.index')
            ->with('deliveries', $deliveries);
    }

    /**
     * Show the form for creating a new Delivery.
     */
    public function create()
    {
        $statuses = $this->statusRepository->getDeliveryStatuses();

        return view('pages.admin.deliveries.create', compact('statuses'));
    }

    /**
     * Store a newly created Delivery in storage.
     */
    public function store(CreateDeliveryRequest $request)
    {
        $input = $request->all();

        $delivery = $this->deliveryRepository->create($input);

        Flash::success('Delivery saved successfully.');

        return redirect(route('deliveries.index'));
    }

    /**
     * Display the specified Delivery.
     */
    public function show($id)
    {
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            Flash::error('Delivery not found');

            return redirect(route('deliveries.index'));
        }

        return view('pages.admin.deliveries.show')->with('delivery', $delivery);
    }

    /**
     * Show the form for editing the specified Delivery.
     */
    public function edit($id)
    {
        $delivery = $this->deliveryRepository->find($id);
        $statuses = $this->statusRepository->getDeliveryStatuses();

        if (empty($delivery)) {
            Flash::error('Delivery not found');

            return redirect(route('deliveries.index'));
        }

        return view('pages.admin.deliveries.edit', compact('delivery', 'statuses'));
    }

    /**
     * Update the specified Delivery in storage.
     */
    public function update($id, UpdateDeliveryRequest $request)
    {
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            Flash::error('Delivery not found');

            return redirect(route('deliveries.index'));
        }

        $delivery = $this->deliveryRepository->update($request->all(), $id);

        Flash::success('Delivery updated successfully.');

        return redirect(route('deliveries.index'));
    }

    /**
     * Remove the specified Delivery from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $delivery = $this->deliveryRepository->find($id);

        if (empty($delivery)) {
            Flash::error('Delivery not found');

            return redirect(route('deliveries.index'));
        }

        $this->deliveryRepository->delete($id);

        Flash::success('Delivery deleted successfully.');

        return redirect(route('deliveries.index'));
    }
}
