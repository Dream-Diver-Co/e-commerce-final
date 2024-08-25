<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function index()
    {
        // Retrieve orders with pagination
        $orders = Order::with('user')->paginate(10);

        // Display the orders list page
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        // Retrieve the specific order and its items
        $order = Order::with('user', 'items.product')->findOrFail($id);

        // Display the order details page
        return view('admin.orders.show', compact('order'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'status' => 'required|string'
        ]);

        // Retrieve the specific order
        $order = Order::findOrFail($id);

        // Update the status of the order
        $order->update(['status' => $validated['status']]);

        // Redirect back to the orders list page with a success message
        // return redirect()->route('admin.orders.index')->with('success', 'Order status updated successfully.');
        return redirect()->back()->with('success', 'Order status updated successfully');

    }

    public function confirmation($id)
    {
        // Retrieve the specific order
        $order = Order::findOrFail($id);

        // Display the order confirmation page
        return view('frontend.order.confirmation', compact('order'));
    }

    public function destroy($id)
    {
        // Retrieve the specific order
        $order = Order::findOrFail($id);

        // Delete the order and its associated items
        $order->items()->delete();
        $order->delete();

        // Redirect back to the orders list page with a success message
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    }
}
