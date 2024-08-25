<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        // Retrieve cart items for the authenticated user
        $cartItems = Cart::where('user_id', auth()->id())->with('product')->get();

        // Display the checkout page with cart items
        return view('frontend.checkout.index', compact('cartItems'));
    }

    public function process(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'payment_method' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'email' => 'required|email',
            'mobile_no' => 'required|string',
            'address_line1' => 'required|string',
            'address_line2' => 'nullable|string',
            'country' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'total_amount' => 'required|numeric', // Validate the total amount
        ]);

        // Generate a UUID for the order ID
        // $orderId = (string) \Str::uuid();

        // Create a new order
        $order = Order::create([
            // 'id' => $orderId, // Explicitly set the UUID
            'user_id' => auth()->id(),
            'total_amount' => $validated['total_amount'],
            'status' => 'Pending',
            'shipping_address' => $validated['address_line1'] . ' ' . $validated['address_line2'],
            'payment_method' => $validated['payment_method'],
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'mobile_no' => $validated['mobile_no'],
            'address_line1' => $validated['address_line1'],
            'address_line2' => $validated['address_line2'],
            'country' => $validated['country'],
            'city' => $validated['city'],
            'state' => $validated['state'],
            'zip_code' => $validated['zip_code'],
        ]);

        // Retrieve cart items for the authenticated user and create order items
        foreach (Cart::where('user_id', auth()->id())->get() as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id, // Use the generated UUID for order ID
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
                'size' => $cartItem->size, // Include size if applicable
                'color' => $cartItem->color, // Include color if applicable
                'total_price' => $cartItem->quantity * $cartItem->product->price,
            ]);
        }

        // Clear the cart for the authenticated user
        Cart::where('user_id', auth()->id())->delete();

        // Redirect to the order confirmation page
        return redirect()->route('order.confirmation', $order->id);
    }
}
