@extends('admin.layouts.master')

@section('title', 'Order Details')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Order #{{ $order->id }} Details</h1>


    <div class="card shadow-sm mb-4">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Order Items</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="bg-light">
                    <tr>
                        {{-- <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total</th> --}}

                        <th scope="col">Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Size</th>
                        <th scope="col">Color</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->items as $item)
                        <tr>
                            <td>
                                @if($item->product && $item->product->image)
                                    <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" width="50">
                                @else
                                    <span>No Image Available</span>
                                @endif
                            </td>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->size }}</td>
                            <td>{{ $item->color }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                            <td>${{ number_format($item->price * $item->quantity, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">User Information</h5>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $order->user ? $order->user->name : 'Unknown' }}</p>
            <p><strong>Email:</strong> {{ $order->user ? $order->user->email : 'Unknown' }}</p>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-secondary text-white">
            <h5 class="mb-0">Shipping Information</h5>
        </div>
        <div class="card-body">
            <p>{{ $order->shipping_address }}</p>
        </div>
    </div>


    <div class="card shadow-sm mb-4">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">Order Summary</h5>
        </div>
        <div class="card-body">
            <p><strong>Total Amount:</strong> ${{ number_format($order->total_amount, 2) }}</p>
            <p><strong>Status:</strong> {{ $order->status }}</p>
            {{-- <p><strong>Status:</strong>
                <span class="badge
                    @if($order->status == 'Pending') badge-warning
                    @elseif($order->status == 'Processing') badge-info
                    @elseif($order->status == 'Shipped') badge-primary
                    @elseif($order->status == 'Delivered') badge-success
                    @elseif($order->status == 'Cancelled') badge-danger
                    @endif">
                    {{ $order->status }}
                </span>
            </p> --}}
        </div>
    </div>

    {{-- <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Update Order Status</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                        <option value="Shipped" {{ $order->status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                        <option value="Cancelled" {{ $order->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Update Status</button>
            </form>
        </div>
    </div> --}}

    <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Back to Orders</a>

        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Order</button>
        </form>
    </div>
</div><br>
@endsection











{{--
@extends('admin.layouts.master')

@section('title', 'Order Details')
@section('content')
<div class="container">
    <h1>Order Details</h1>

    <div class="card mb-4">
        <div class="card-header">
            Order #{{ $order->id }} Details
        </div>
        <div class="card-body">
            <h5>User Information</h5>
            <p><strong>Name:</strong> {{ $order->user ? $order->user->name : 'Unknown' }}</p>
            <p><strong>Email:</strong> {{ $order->user ? $order->user->email : 'Unknown' }}</p>

            <h5>Shipping Information</h5>
            <p>{{ $order->shipping_address }}</p>

            <h5>Order Items</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->items as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>${{ $item->price }}</td>
                            <td>${{ $item->price * $item->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h5>Order Summary</h5>
            <p><strong>Total Amount:</strong> ${{ $order->total_amount }}</p>
            <p><strong>Status:</strong> {{ $order->status }}</p>

            <!-- Update Order Status Form -->
            <h5>Update Order Status</h5>
            <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                        <option value="Shipped" {{ $order->status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                        <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                        <option value="Cancelled" {{ $order->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Update Status</button>
            </form>

            <!-- Delete Order Form -->
            <h5 class="mt-4">Delete Order</h5>
            <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Order</button>
            </form>
        </div>
    </div>

    <a href="{{ route('admin.orders.index') }}" class="btn btn-secondary">Back to Orders</a>
</div>
@endsection --}}
