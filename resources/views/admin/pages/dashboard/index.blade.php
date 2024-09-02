@extends('admin.layouts.master')

@section('title', 'Dream Shop')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ env('APP_NAME') }}</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card bg-pink">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-black font-size-15 mb-2"><b>Total Sales</b></p>
                        <h4 class="mb-2">{{ $totalDelivered }}</h4>
                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>{{ $totalDelivered }}</span>from previous period</p>
                    </div>
                    <div class="avatar-sm">
                        <span class="avatar-title bg-light text-primary rounded-3">
                            <i class="ri-shopping-cart-2-line font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
        <div class="card bg-success">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-black font-size-14 mb-2"><b>New Orders</b></p>
                        <h4 class="mb-2">{{ $newOrdersCount }}</h4>
                        <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>{{ $newOrdersCount }}</span>from previous period</p>
                    </div>
                    <div class="avatar-sm">
                        <span class="avatar-title bg-light text-success rounded-3">
                            <i class="mdi mdi-currency-usd font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
        <div class="card bg-primary">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-black font-size-15 mb-2"><b>New Users</b></p>
                        <h4 class="mb-2">{{ $totalUsers }}</h4>
                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>{{ $totalUsers }}</span>from previous period</p>
                    </div>
                    <div class="avatar-sm">
                        <span class="avatar-title bg-light text-primary rounded-3">
                            <i class="ri-user-3-line font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
    {{-- <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <p class="text-truncate font-size-14 mb-2">Unique Visitors</p>
                        <h4 class="mb-2">29670</h4>
                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
                    </div>
                    <div class="avatar-sm">
                        <span class="avatar-title bg-light text-success rounded-3">
                            <i class="mdi mdi-currency-btc font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col --> --}}
</div><!-- end row -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                {{-- <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div> --}}

                <h4 class="card-title mb-4">Order List</h4>

                <div class="table-responsive">
                    <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">SL</th>
                                {{-- <th scope="col">Order ID</th> --}}
                                <th scope="col">Name</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">City</th>
                                <th scope="col">Placed On</th>
                                {{-- <th scope="col">Status</th>
                                <th scope="col" class="text-center">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $order->id }}</td> --}}
                                    <td><h6 class="mb-0">{{ $order->first_name }}</h6></td>
                                    {{-- <td>
                                        @if($order->user)
                                            {{ $order->user->name }}
                                        @else
                                            <em>Unknown User</em>
                                        @endif
                                    </td> --}}
                                    <td>${{ number_format($order->total_amount, 2) }}</td>
                                    <td>{{ $order->payment_method }}</td>
                                    <td>{{ $order->city }}</td>
                                    <td>{{ $order->created_at->format('d M Y, H:i') }}</td>
                                    {{-- <td>
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

                                    <td class="text-center">
                                        <!-- View Order Details -->
                                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-sm btn-outline-primary mb-1">View</a>

                                        <!-- Delete Order Form -->
                                        <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" class="d-inline-block mb-1" onsubmit="return confirm('Are you sure you want to delete this order?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table> <!-- end table -->
                </div>
            </div><!-- end card -->
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $orders->links() }}
            </div>
        </div><!-- end card -->
    </div>
</div>
<!-- end row -->



@endsection
