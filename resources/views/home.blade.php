@extends('layouts.front')

@section('content')

<div class="pl-200 pr-200 overflow clearfix">
    <div class="categori-menu-slider-wrapper clearfix">
        <div class="categories-menu">
            <div class="category-heading">
                <h3> All Departments <i class="pe-7s-angle-down"></i></h3>
            </div>
            @include('_category-list')
        </div>
        <div class="menu-slider-wrapper">
            <div class="menu-style-3 menu-hover text-center">
                <nav>
                    <ul>
                        <li><a href="{{url('/')}}">home</a>
                        </li>

                        <li><a href="blog.html">blog <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>

                        </li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="slider-area">
                <div class="slider-active owl-carousel owl-loaded owl-drag">
                    
                    
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2595px, 0px, 0px); transition: all 0s ease 0s; width: 5190px;"><div class="owl-item cloned" style="width: 865px;"><div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/5.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            <h4 class="animated">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 865px;"><div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/20.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            <h4 class="animated">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div></div><div class="owl-item" style="width: 865px;"><div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/5.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            <h4 class="animated">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div></div><div class="owl-item active" style="width: 865px;"><div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/20.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            <h4 class="animated">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 865px;"><div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/5.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            <h4 class="animated">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 865px;"><div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/20.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated">Invention of <br>design platform</h2>
                            <h4 class="animated">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>
            </div>
        </div>
    </div>
</div>



<div class="electronic-banner-area">
    <div class="custom-row-2">
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/15.jpg" alt="">
                <div class="electro-banner-style electro-banner-position">
                    <h1>Live 4K! </h1>
                    <h2>up to 20% off</h2>
                    <h4>Amazon exclusives</h4>
                    <a href="product-details.html">Buy Now→</a>
                </div>
            </div>
        </div>
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/16.jpg" alt="">
                <div class="electro-banner-style electro-banner-position2">
                    <h1>Xoxo ssl </h1>
                    <h2>up to 15% off</h2>
                    <h4>Amazon exclusives</h4>
                    <a href="product-details.html">Buy Now→</a>
                </div>
            </div>
        </div>
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/17.jpg" alt="">
                <div class="electro-banner-style electro-banner-position3">
                    <h1>BY Laptop</h1>
                    <h2>Super Discount</h2>
                    <h4>Amazon exclusives</h4>
                    <a href="product-details.html">Buy Now→</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">

    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>Top Products</h2>
        </div>
        <div class="top-product-style">

            <div>
                <div class="" id="electro1">
                    <div class="custom-row-2">
                        @foreach($products as $product)
                        <div class="custom-col-style-2 custom-col-4">
                            <div class="product-wrapper product-border mb-24">
                                <div class="product-img-3">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/electro/1.jpg" alt="">
                                    </a>
                                    <div class="product-action-right">
                                        <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                        <a class="animate-top" title="Add To Cart" 
                                            href="{{route('add_to_cart',$product->id)}}">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="animate-left" title="Wishlist" href="#">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content-4 text-center">
                                    <div class="product-rating-4">
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                    <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                    <span>{!!$product->description!!}</span>
                                    <h5>{{$product->price}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection
