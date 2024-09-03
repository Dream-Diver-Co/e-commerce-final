    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="{{ route('about') }}">About</a>
                    <a class="text-body mr-3" href="{{ route('contact') }}">Contact</a>
                    <a class="text-body mr-3" href="">Help</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                        {{-- <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('register') }}" class="dropdown-item" type="button">Create Account</a>
                            <a href="{{ route('login') }}" class="dropdown-item" type="button">Sign in</a>
                        </div> --}}
                        <div class="dropdown-menu dropdown-menu-right cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                            <ul>
                                @if(auth()->check())

                                    @if(auth()->user()->role === 'user')
                                        <li>
                                            <a href="{{ route('dashboard') }}" target="_blank"><i class="fi fi-rs-user mr-10"></i>Dashboard</a>
                                        </li>
                                    @elseif(auth()->user()->role === 'admin')
                                        <li>
                                            <a href="{{ route('admin.dashboard') }}" target="_blank"><i class="fi fi-rs-user mr-10"></i>Dashboard</a>
                                        </li>
                                    @elseif(auth()->user()->role === 'vendor')
                                        <li>
                                            <a href="{{ route('vendor.dashboard') }}" target="_blank"><i class="fi fi-rs-user mr-10"></i>Dashboard</a>
                                        </li>
                                    @endif

                                    {{-- <li>
                                        <a href="{{ route('profile.edit')}}" target="_blank"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                    </li> --}}
                                    <li>
                                        <a href=""><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                    </li>
                                    <li>
                                        {{-- <a href="{{ route('logout') }}"><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a> --}}


                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                <i class="fi fi-rs-sign-out mr-10"></i>
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </li>
                                @else
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}"><i class="fi fi-rs-user-add mr-10"></i>Create an Account</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}"><i class="fi fi-rs-sign-in mr-10"></i>Sign In</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="#" class="btn px-0 ml-2" id="nav-wishlist" data-toggle="modal" data-target="#wishlistModal">
                        <i class="fas fa-heart text-primary"></i>
                        {{-- <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span> --}}

                    </a>

                    <a href="{{ route('cart.show')}}" class="btn  my-2 my-sm-0">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        <span class="badge text-dark border border-dark rounded-circle" id="overall-quantity" style="padding-bottom: 2px;">@isset($cartItems)
                            {{ $cartItems->sum('quantity') }}
                        @else
                            0
                        @endisset</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="{{ route('index')}}" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Dream</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="{{ route('shop') }}" class="dropdown-item">Men's Dresses</a>
                                <a href="{{ route('shop') }}" class="dropdown-item">Women's Dresses</a>
                                <a href="{{ route('shop') }}" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="{{ route('shop') }}" class="nav-item nav-link">Product Iteam</a>
                        <a href="{{ route('product')}}" class="nav-item nav-link">All Product</a>
                        <a href="{{ route('offer')}}" class="nav-item nav-link">Offer Product</a>
                        <a href="{{ route('shop') }}" class="nav-item nav-link">Men's Dresses</a>
                        <a href="{{ route('shop') }}" class="nav-item nav-link">Women's Dresses</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Dream </span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('index') }}" class="nav-item nav-link {{ Request::routeIs('index') ? 'active' : '' }}">Home</a>
                            <a href="{{ route('shop') }}" class="nav-item nav-link {{ Request::routeIs('shop') ? 'active' : '' }}">Shop</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::routeIs('about') ? 'active' : '' }}">About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle {{ Request::routeIs(['cart.show', 'checkout.index']) ? 'active' : '' }}" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{ route('cart.show')}}" class="dropdown-item {{ Request::routeIs('cart.show') ? 'active' : '' }}">Shopping Cart</a>
                                    <a href="{{ route('checkout.index')}}" class="dropdown-item {{ Request::routeIs('checkout.index') ? 'active' : '' }}">Checkout</a>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="#" class="btn px-0" id="nav-wishlist" data-toggle="modal" data-target="#wishlistModal">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;" id="wishlist-count">0</span>
                            </a>
                            <a href="{{ route('cart.show')}}" class="btn  my-2 my-sm-0">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">
                                    <span id="overall-quantity">
                                        @isset($cartItems)
                                            {{ $cartItems->sum('quantity') }}
                                        @else
                                            0
                                        @endisset
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
