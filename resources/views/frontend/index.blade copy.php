@extends("frontend.layouts.master")

@section("content")

<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100"style="height: 450px; width: 300px;"  src="{{ asset('frontend/img/men/panjabi/Panjabi7.jpg') }}" alt="">
                    <div class="product-action">
                        <a class="label">New</a>
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
    </div>
</div>
<!-- Products End -->




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
    </div>
</div>
<!-- Products End -->




@endsection
