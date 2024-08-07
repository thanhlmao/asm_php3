@extends('client.layouts.default')

@section('content')
<main>
    <div class="header-video">
        <div id="hero_video">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-6">
                            <div class="slide-text white">
                                <h3>Armor Air<br>Max 720 Sage Low</h3>
                                <p>Limited items available at this price</p>
                                <a class="btn_1" href="#0" role="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/img/video_fix.png') }}" alt="" class="header-video--media" data-video-src="{{ asset('assets/video/intro') }}" data-teaser-source="{{ asset('assets/video/intro') }}" data-provider="" data-video-width="1920" data-video-height="960">
    </div>
    <!-- /header-video -->

    <div class="feat">
        <div class="container">
            <ul>
                <li>
                    <div class="box">
                        <i class="ti-gift"></i>
                        <div class="justify-content-center">
                            <h3>Free Shipping</h3>
                            <p>For all orders over $99</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-wallet"></i>
                        <div class="justify-content-center">
                            <h3>Secure Payment</h3>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-headphone-alt"></i>
                        <div class="justify-content-center">
                            <h3>24/7 Support</h3>
                            <p>Online top support</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/feat-->
    
    <div class="container margin_60_35">
        <div class="row small-gutters categories_grid">
            <div class="col-sm-12 col-md-6">
                <a href="listing-grid-1-full.html">
                    <img src="{{ asset('assets/img/img_cat_home_1_placeholder.png') }}" data-src="{{ asset('assets/img/img_cat_home_1.jpg') }}" alt="" class="img-fluid lazy">
                    <div class="wrapper">
                        <h2>Life Style</h2>
                        <p>115 Products</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="row small-gutters mt-md-0 mt-sm-2">
                    <div class="col-sm-6">
                        <a href="listing-grid-1-full.html">
                            <img src="{{ asset('assets/img/img_cat_home_2_placeholder.png') }}" data-src="{{ asset('assets/img/img_cat_home_2.jpg') }}" alt="" class="img-fluid lazy">
                            <div class="wrapper">
                                <h2>Running</h2>
                                <p>150 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="listing-grid-1-full.html">
                            <img src="{{ asset('assets/img/img_cat_home_2_placeholder.png') }}" data-src="{{ asset('assets/img/img_cat_home_3.jpg') }}" alt="" class="img-fluid lazy">
                            <div class="wrapper">
                                <h2>Football</h2>
                                <p>90 Products</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 mt-sm-2">
                        <a href="listing-grid-1-full.html">
                            <img src="{{ asset('assets/img/img_cat_home_4_placeholder.png') }}" data-src="{{ asset('assets/img/img_cat_home_4.jpg') }}" alt="" class="img-fluid lazy">
                            <div class="wrapper">
                                <h2>Training</h2>
                                <p>120 Products</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/categories_grid-->
    </div>
    <!-- /container -->

    <hr class="mb-0">
    
    <div class="container margin_60_35">
        <div class="main_title mb-4">
            <h2>New Arrival</h2>
            <span>Products</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div class="isotope_filter">
            <ul>
                <li><a href="#0" id="all" data-filter="*">All</a></li>
                <li><a href="#0" id="popular" data-filter=".popular">Popular</a></li>
                <li><a href="#0" id="sale" data-filter=".sale">Sale</a></li>
            </ul>
        </div>
        <div class="isotope-wrapper">
            <div class="row small-gutters">
                
                <!-- /col -->
                @foreach($products as $key => $value)
                <div class="col-6 col-md-4 col-xl-3 isotope-item sale">
                    <div class="grid_item">
                        <span class="ribbon off">-30%</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="{{ $value->image }}" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="{{ $value->image }}" alt="">
                            </a>
                            <div data-countdown="2019/05/10" class="countdown"></div>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href=" {{ route('product_detail',$value->id) }} ">
                            <h3>{{ $value->name }}</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">{{ $value->price }}</span>
                            <span class="old_price">$170.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                @endforeach
                <!-- /col -->
                
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item popular">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/4_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="{{ route('product_detail',$value->id) }}">
                            <h3>Armor ACG React Terra</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$110.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item popular">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/5.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/5_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Zoom Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$140.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item popular">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/6.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/6_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Alpha</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$130.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item popular">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/7.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/7_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Max 98</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$115.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
                <div class="col-6 col-md-4 col-xl-3 isotope-item popular">
                    <div class="grid_item">
                        <span class="ribbon hot">Hot</span>
                        <figure>
                            <a href="product-detail-1.html">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/8.jpg" alt="">
                                <img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/8_b.jpg" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="product-detail-1.html">
                            <h3>Armor Air Max 720</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$120.00</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /isotope-wrapper -->
    </div>
    <!-- /container -->
</main>
<!-- /main -->

@endsection
