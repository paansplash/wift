<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\OrderRepository;
use App\Repositories\StatusRepository;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class OrderController extends AppBaseController
{
    /** @var OrderRepository $orderRepository*/
    private $orderRepository;
    private $statusRepository;

    public function __construct(OrderRepository $orderRepo, StatusRepository $statusRepo)
    {
        $this->orderRepository = $orderRepo;
        $this->statusRepository = $statusRepo;
    }

    /**
     * Display a listing of the Order.
     */
    public function index(Request $request)
    {
        $orders = $this->orderRepository->paginate(10);

        return view('pages.admin.orders.index')
            ->with('orders', $orders);
    }

    /**
     * Show the form for creating a new Order.
     */
    public function create()
    {
        $statuses = $this->statusRepository->getActivityStatuses();

        return view('pages.admin.orders.create', compact('statuses'));
    }

    /**
     * Store a newly created Order in storage.
     */
    public function store(CreateOrderRequest $request)
    {
        $input = $request->all();

        $order = $this->orderRepository->create($input);

        Flash::success('Order saved successfully.');

        return redirect(route('orders.index'));
    }

    /**
     * Display the specified Order.
     */
    public function show($id)
    {
        $order = $this->orderRepository->find($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        return view('pages.admin.orders.show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified Order.
     */
    public function edit($id)
    {
        $order = $this->orderRepository->find($id);
        $statuses = $this->statusRepository->getActivityStatuses();

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        return view('pages.admin.orders.edit', compact('order', 'statuses'));
    }

    /**
     * Update the specified Order in storage.
     */
    public function update($id, UpdateOrderRequest $request)
    {
        $order = $this->orderRepository->find($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        $order = $this->orderRepository->update($request->all(), $id);

        Flash::success('Order updated successfully.');

        return redirect(route('orders.index'));
    }

    /**
     * Remove the specified Order from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $order = $this->orderRepository->find($id);

        if (empty($order)) {
            Flash::error('Order not found');

            return redirect(route('orders.index'));
        }

        $this->orderRepository->delete($id);

        Flash::success('Order deleted successfully.');

        return redirect(route('orders.index'));
    }
}
