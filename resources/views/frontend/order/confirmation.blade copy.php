@extends('frontend.layouts.master')

@section('content')
    <div class="container">
        <h1>Order Confirmation</h1>
        <p>Thank you for your order!</p>

        <div class="row px-xl-5">
            <div class="col-lg-12">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Details</span></h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle bg-light">
                        <thead class="thead-light">
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->items as $item)
                                <tr>
                                <td> @if($item->product && $item->product->image)
                                            <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" width="50">
                                        @else
                                            <span>No Image Available</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->product->name }}</td>
                                    <td>{{ $item->size }}</td>
                                    <td>{{ $item->color }}</td>
                                    <td>${{ $item->product->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>${{ $item->product->price * $item->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <h4>Total Amount: ${{ $order->total_amount }}</h4>
    </div>
@endsection
