@extends("frontend.layouts.master")

@section("content")

 <!-- Carousel Start- -->
 <div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
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
                                            {{-- <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="">Shop Now</a> --}}
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

                    {{-- <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/men1.gif') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('men') }}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/women.gif') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women Fashion</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('women') }}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/baby.gif') }}" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Kids Fashion</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="{{ route('baby') }}">Shop Now</a>
                            </div>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
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
        </div>
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


<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100"style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/men/panjabi/Panjabi7.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Panjabi 7"  data-price="459" data-image="{{ asset('frontend/img/men/panjabi/Panjabi7.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Panjabi 7" data-price="459" data-image="{{ asset('frontend/img/men/panjabi/Panjabi7.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Panjabi 7</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/women/dresses/Dresses7.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Dresses 7"  data-price="459" data-image="{{ asset('frontend/img/women/dresses/Dresses7.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Dresses 7" data-price="459" data-image="{{ asset('frontend/img/women/dresses/Dresses7.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Dresses 7</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/men/f-shirt/Formal1.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Formal Shirt 6"  data-price="459" data-image="{{ asset('frontend/img/men/f-shirt/Formal1.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Formal Shirt 6" data-price="459" data-image="{{ asset('frontend/img/men/f-shirt/Formal1.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Formal Shirt 6</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/women/Kameez/Kameez8.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Kameez"  data-price="459" data-image="{{ asset('frontend/img/women/Kameez/Kameez8.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Kameez " data-price="459" data-image="{{ asset('frontend/img/women/Kameez/Kameez8.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Kameez</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/women/Bags/Bags5.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Bag"  data-price="459" data-image="{{ asset('frontend/img/women/Bags/Bags5.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Bag " data-price="459" data-image="{{ asset('frontend/img/women/Bags/Bags5.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Bag</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
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
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/men/blazer/Blazer7.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Blazer 6"  data-price="459" data-image="{{ asset('frontend/img/men/blazer/Blazer7.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Blazer 6" data-price="459" data-image="{{ asset('frontend/img/men/blazer/Blazer7.jpg') }}g" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Blazer 6</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/women/Cosmetic/Cosmetic1.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Cosmetic"  data-price="459" data-image="{{ asset('frontend/img/women/Cosmetic/Cosmetic1.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Cosmetic" data-price="459" data-image="{{ asset('frontend/img/women/Cosmetic/Cosmetic1.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Cosmetic</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
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
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/baby/Clothing/Clothing4.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Clothing"  data-price="459" data-image="{{ asset('frontend/img/baby/Clothing/Clothing4.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Clothing" data-price="459" data-image="{{ asset('frontend/img/baby/Clothing/Clothing4.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Clothing</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


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


<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent Products</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/women/shoes/Shoes2.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Shoes"  data-price="459" data-image="{{ asset('frontend/img/women/shoes/Shoes2.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Shoes" data-price="459" data-image="{{ asset('frontend/imgwomen/shoes/Shoes2.jpg ') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Shoes1</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/women/bottom/Bottoms2.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Bottom 2"  data-price="459" data-image="{{ asset('frontend/img/women/bottom/Bottoms2.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Bottom 2" data-price="459" data-image="{{ asset('frontend/img/women/bottom/Bottoms2.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Bottom 2</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/product-7.jpg ') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Formal Shirt 6"  data-price="459" data-image="{{ asset('frontend/img/product-7.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Formal Shirt 6" data-price="459" data-image="{{ asset('frontend/img/product-7.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Shirt</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100"style="height: 450px; width: 300px;" src="{{ asset('frontend/img/men/c-shirt/Casual8.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Casul Shirt 8"  data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual8.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Casul Shirt 8" data-price="459" data-image="{{ asset('frontend/img/men/c-shirt/Casual8.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Casul Shirt 8</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/men/t-shirt/T-Shirt6.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="T-Shirt 4"  data-price="459" data-image="{{ asset('frontend/img/men/t-shirt/T-Shirt6.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="T_Shirt 4" data-price="459" data-image="{{ asset('frontend/img/men/t-shirt/T-Shirt6.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">T-Shirt 4</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small class="far fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/women/tops/tops2.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Tops 2"  data-price="459" data-image="{{ asset('frontend/img/women/tops/tops2.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Tops 2" data-price="459" data-image="{{ asset('frontend/img/women/tops/tops2.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Tops 2</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/men/bottom/Bottom2.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Bottom 2"  data-price="459" data-image="{{ asset('frontend/img/men/bottom/Bottom2.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Bottom 2" data-price="459" data-image="{{ asset('frontend/img/men/bottom/Bottom2.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Bottom 2</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/men/shoes/Sneakers6.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="btn btn-outline-dark btn-square view-btn" data-name="Shoes 6"  data-price="459" data-image="{{ asset('frontend/img/men/shoes/Sneakers6.jpg') }}" data-miles="35,000 mi" data-transmission="Auto" data-hp="700 hp"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-outline-dark btn-square product-heart-btn" data-name="Shoes 6" data-price="459" data-image="{{ asset('frontend/img/men/shoes/Sneakers6.jpg') }}" href="#"><i class="far fa-heart"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">Shoes 6</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star-half-alt text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="{{ asset('frontend/img/vendor-1.jpg') }}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('frontend/img/vendor-2.jpg') }}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('frontend/img/vendor-3.jpg') }}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('frontend/img/vendor-4.jpg') }}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('frontend/img/vendor-5.jpg') }}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('frontend/img/vendor-6.jpg') }}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('frontend/img/vendor-7.jpg') }}" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="{{ asset('frontend/img/vendor-8.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->

@endsection
