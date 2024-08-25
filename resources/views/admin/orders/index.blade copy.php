@extends('admin.layouts.master')

@section('title', 'Orders')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Manage Orders</h1>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Order List</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">User</th>
                        <th scope="col">Total Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Placed On</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>
                                @if($order->user)
                                    {{ $order->user->name }}
                                @else
                                    <em>Unknown User</em>
                                @endif
                            </td>
                            <td>${{ number_format($order->total_amount, 2) }}</td>

                            <td>
                                 <!-- Update Order Status Form -->
                                 <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" class="d-inline-block mb-1">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" class="form-control form-control-sm d-inline-block w-auto mb-2">
                                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                                        <option value="Shipped" {{ $order->status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                                        <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                        <option value="Cancelled" {{ $order->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-success">Update</button>
                                </form>
                            </td>
                            <td>{{ $order->created_at->format('d M Y, H:i') }}</td>
                            <td class="text-center">
                                <!-- View Order Details -->
                                <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-outline-primary mb-1">View</a>

                                <!-- Delete Order Form -->
                                <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline-block mb-1" onsubmit="return confirm('Are you sure you want to delete this order?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $orders->links() }}
    </div>
</div>
@endsection

