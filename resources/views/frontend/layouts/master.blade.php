
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dream Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Dream Shop" name="keywords">
    <meta content="Dream Shop" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/admin/assets/images/Dream.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/add-to-card.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

</head>

<body>

    {{-- header start --}}
    @include("frontend.partials.header")
    {{-- header end --}}

    <!--Product Success Message Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-primary">
                <div class="modal-body text-center">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <p>Product has been successfully added to the cart!</p>
                </div>
            </div>
        </div>
    </div>


    @yield("content")

    <!-- Modal start -->
    <section>

        <!-- Cart modal start -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-card">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Your Cart</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body modal-pd">
                        <table class="show-cart table">
                            <thead class="card-th">
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Cart items will be dynamically added here -->
                            </tbody>
                        </table>
                        <div class="grand-total">
                            Total quantity: <span class="total-count"></span> &nbsp;&nbsp; Total price: $<span class="total-cart"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="" class="btn btn-success">Cart View</a>
                        <a href="" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart modal end -->



        <!-- Wishlist Modal start-->
        <div class="modal fade" id="wishlistModal" tabindex="-1" role="dialog" aria-labelledby="wishlistModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="wishlistModalLabel">Wishlist</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="wishlist-items">
                            <!-- Wishlist items will be added here by JavaScript -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist Modal end-->
    </section>
    <!-- Modal End -->



    <!-- Footer Start -->
    @include("frontend.partials.footer")
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('frontend/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('frontend/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/add-to-card.js') }}"></script>
    <script src="{{ asset('frontend/js/wishlist.js') }}"></script>

</body>

</html>
