@extends("frontend.layouts.master")

@section("content")

 <!-- Carousel Start -->
 <div class="container-fluid mb-3">
    <div class="row">
        <div class="col-lg-12">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($heroes as $key => $hero)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} position-relative" style="height: 430px;">
                                    <img class="position-absolute w-100 h-100" src="{{ asset('storage/' . $hero->image) }}" style="object-fit: cover;">
                                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                        <div class="p-3" style="max-width: 700px;">
                                            <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">{{ $hero->title }}</h1>
                                            <p class="mx-md-5 px-5 animate__animated animate__bounceIn">{{ $hero->description }}</p>
                                            <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('shop') }}">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{ asset('frontend/img/offer4.gif') }}" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="{{ route('offer') }}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="{{ asset('frontend/img/offer1.gif') }}" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="{{ route('offer') }}" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div> --}}
    </div>
 </div>
<!-- Carousel End -->


<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
    <div class="row px-xl-5 pb-3">
        {{-- @foreach ($categories as $category)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route($category->slug) }}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>{{ $category->title }}</h6>
                        <small class="text-body">{{ $category->continuity }} Products</small>
                    </div>
                </div>
            </a>
        </div>
    @endforeach --}}

      <!-- Pagination Links -->
        {{-- <div class="d-flex justify-content-center">
            {{ $categories->links('pagination::bootstrap-4') }}
        </div> --}}
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('shop') }}">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" style="height: 100%; width: 100%;" src="{{ asset('frontend/img/men.gif') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Mens Item</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('product')}}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/men/panjabi/Panjabi.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Pnajabi</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('product')}}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/cat-3.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Shoes</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('product')}}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/men/c-shirt/Casual.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Shirts</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('shop') }}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" style="height: 100%; width: 100%;" src="{{ asset('frontend/img/women2.gif') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Womens Item</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('product')}}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/women/dresses/Dresses.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Dresses</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('product')}}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" style="height: 100%; width: 100%;" src="{{ asset('frontend/img/women/Cosmetic/Cosmetic.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Cosmetic</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('product')}}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/women/Bags/Bags.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Bags</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('shop') }}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" style="height: 100%; width: 100%;" src="{{ asset('frontend/img/baby.gif') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Baby Item</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('product')}}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/baby.png') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Baby Foods</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('product')}}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/baby2.jpg') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Baby Clothing</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="{{ route('product')}}">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="{{ asset('frontend/img/baby4.png') }}" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Strollers</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Categories End -->

<!-- Featured Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Featured Products</span>
    </h2>
    <div class="row px-xl-5">
        @foreach($featuredProducts as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('storage/'. $product->image) }}" alt="">
                    <div class="product-action">
                        @if($product->title)
                            <a class="label">{{ $product->title }}</a>
                        @endif
                        <a href="{{ route('product_details', ['id' => $product->id]) }}" class="btn btn-outline-dark btn-square">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="{{ $product->name }}" data-price="{{ $product->price }}" data-image="{{ asset('storage/'. $product->image) }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('product_details', ['id' => $product->id]) }}">{{ $product->name }}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>${{ $product->price }}</h5>
                        @if($product->old_price)
                            <h6 class="text-muted ml-2"><del>${{ $product->old_price }}</del></h6>
                        @endif
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Featured Products End -->

<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="row px-xl-5">
        <div class="col-md-6">
            @if($summers->isNotEmpty())
                @php
                    $summer = $summers->first();
                @endphp
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{ asset('storage/'. $summer->image) }}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">{{ $summer->subtitle }}</h6>
                        <h3 class="text-white mb-3">{{ $summer->title }}</h3>
                        <a href="{{ route('offer') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-6">
            @if($winters->isNotEmpty())
                @php
                    $item = $winters->first();
                @endphp
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">{{ $item->subtitle }}</h6>
                        <h3 class="text-white mb-3">{{ $item->title }}</h3>
                        <a href="{{ route('offer') }}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Offer End -->

<!-- Recent Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Recent Products</span>
    </h2>
    <div class="row px-xl-5">
        @foreach($recentProducts as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('storage/'. $product->image) }}" alt="">
                    <div class="product-action">
                        @if($product->title)
                            <a class="label">{{ $product->title }}</a>
                        @endif
                        <a href="{{ route('product_details', ['id' => $product->id]) }}" class="btn btn-outline-dark btn-square">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="{{ $product->name }}" data-price="{{ $product->price }}" data-image="{{ asset('storage/'. $product->image) }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="{{ route('product_details', ['id' => $product->id]) }}">{{ $product->name }}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>${{ $product->price }}</h5>
                        @if($product->old_price)
                            <h6 class="text-muted ml-2"><del>${{ $product->old_price }}</del></h6>
                        @endif
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- Recent Products End -->


<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                @foreach($clients as $client)
                <div class="bg-light p-4">
                    <img src="{{ asset('storage/' . $client->image) }}" alt="client-logo">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->

@endsection
