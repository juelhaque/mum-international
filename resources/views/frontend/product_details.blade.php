@extends('frontend.layouts.app')
@section('content')
    <!-- product-details -->
    <section class="hero-wrap hero-wrap-2" style="margin-top: 100px">
        <!-- <div class="overlay"></div> -->
        <div class="container-fluid mb-3">
            <div class="row align-items-start justify-content-start" style="box-shadow: 0px 15px 10px -15px #03a503;">
                <div class="col-md-6 ftco-animate pb-2 text-start">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="{{ route('frontend.home') }}">Home
                                <i class="fas fa-angle-right"></i></a></span> <span class="mr-2"><a
                                href="{{ route('frontend.product') }}">Product <i class="fas fa-angle-right"></i></a></span>
                        <span>{{ $products->name }}<i class="fas fa-angle-right"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ftco-animate" style="box-shadow: 0 0 3.125rem rgba(0, 0, 0, 0.2);">
                    <img src="{{ asset($products->image) }}" alt="" class="img-fluid sigle_image"
                        style="width: 100%; height: 450px object-fit: contain;">
                </div>
                <div class="col-md-6 ftco-animate pl-4">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Product Details </h3>
                            <p><strong>Product Name :</strong>{{ $products->name }}</p>
                            <p><strong>Category :</strong> Hair Care</p>
                            <p><strong>Product Code :</strong>{{ $products->product_code }}</p>
                            <div class="p-1">
                                <p>{{ $products->short_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-2">
                    <h3>Description </h3>
                    <div>
                        <p><strong>Directions for use:</strong></p>
                        <p>{!! $products->description !!}</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
