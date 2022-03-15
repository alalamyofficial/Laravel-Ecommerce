@extends('layouts.front')

@section('content')

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
