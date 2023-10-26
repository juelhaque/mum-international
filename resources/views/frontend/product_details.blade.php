@extends('frontend.layouts.app')
@section('content')
    <!-- product-details -->
    <section class="first-section hero-wrap hero-wrap-2">
        <!-- <div class="overlay"></div> -->
        <div class="container-fluid mb-3">
            <div class="row align-items-start justify-content-start">
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
                <div class="col-md-6 ftco-animate mb-4 mb-md-auto" style="border: 2px solid lightgreen;padding-top: 2rem;padding-bottom: 2rem;">
                    <img src="{{ asset($products->image) }}" alt="" class="img-fluid sigle_image"
                        style="width: 100%; height: 280px; object-fit: contain;">
                </div>
                <div class="col-md-6 ftco-animate pl-md-4" style="background: lightgreen;color: black;">
                    <div class="sidebar-box ftco-animate">
                        <div class="categories mt-4">
                            <h3>Product Details </h3>
                            <p><strong>Product Name :</strong> {{ $products->name }}</p>
                            <p><strong>Category : </strong> {{ $products->category->name }}</p>
                            <p><strong>Product Code : </strong> {{ $products->product_code }}</p>
                            <div class="p-1">
                                <p>{{ $products->short_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-lg-12 p-2">
                    <h3>Description </h3>
                    <div style="text-align: justify">
                        <p><strong>Directions for use:</strong></p>
                        <p>{!! $products->description !!}</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h3>Related Product:</h3>
                </div>
                @php
                    $related = \App\Models\Product::where('category_id', $products->category_id)->get();

                @endphp

                <div class="tiny-slider arrow-hover arrow-gray mt-2">
                    <div class="tiny-slider-inner" data-arrow="true" data-dots="false" data-autoplay="3800" data-gutter="20"
                        data-items-xl="4" data-items-lg="4" data-items-md="4" data-items-sm="3" data-items-xs="2">
                        @foreach ($related as $product)
                            <div class="col-6 col-md-3 portfolio-card isotope-item digital py-3">
                                <a style="color: var(--bs-body-color)"
                                    href="{{ route('frontend.product_details', $product->id) }}">
                                    <div class="portfolio-card-body">
                                        <div class="portfolio-card-header">
                                            <img src="{{ asset($product->image) }}" alt=""
                                                style="width: 100%; ">
                                        </div>
                                        <div class="portfolio-card-footer px-3" style="text-align: justify;">
                                            <h5 class="card-title mt-2">{{ $product->name }}</h5>
                                            <p class="card-text">
                                                {{ Illuminate\Support\Str::limit($product->short_description, 74) }}</p>
                                        </div>
                                        <div class="text-end">
                                            <a href="{{ route('frontend.product_details', $product->id) }}"
                                                class="btn btn-sm btn-success mx-3 mb-3">Details</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
