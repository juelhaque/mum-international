@extends('frontend.layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="margin-top: 100px">
    <!-- <div class="overlay"></div> -->
    <div class="container">
        <div class="row align-items-start justify-content-start" style="box-shadow: 0px 15px 10px -15px #03a503;">
            <div class="col-md-6 ftco-animate pb-0 text-start">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ route('frontend.home') }}">Home <i class="fas fa-angle-right"></i></a></span>
                    {{-- <span class="mr-2"><a href="{{ route('frontend.news_event') }}">New & Events <i class="fas fa-angle-right"></i></a></span> --}}
                    <span> Featured Product <i class="fas fa-angle-right"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Products -->
<section class="portfolio pb-0">
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="d-flex justify-content-center mb-0">
                <h2 class="border-bottom text-center"><b>FEATURED PRODUCTS</b></h2>
            </div>
            <div class="col-md-12">
                <div class="row portfolio-wrap grid items-5">
                    <!-- portfolio-card -->
                    @foreach ($products as $product)
                        <div class="col-md-2 portfolio-card isotope-item digital py-3">
                            <a style="color: var(--bs-body-color)"
                                href="{{ route('frontend.product_details', $product->id) }}">
                                <div class="portfolio-card-body">
                                    <div class="portfolio-card-header">
                                        <img src="{{ asset($product->image) }}" alt=""
                                            style="width: 100%; height: 180px ">
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
    {{-- <div class="container-fluid mt-2">
        <div class="row">
            <div class="d-flex justify-content-center mb-0">
                <h2 class="border-bottom text-center"><b>FEATURED PRODUCTS</b></h2>
            </div>
            <div class="col-md-12">
                <div class="portfolio-wrap grid items-5 items-padding">
                    <!-- portfolio-card -->
                    @foreach ($products as $product)
                        <div class="portfolio-card isotope-item digital">
                            <a style="color: black" href="{{ route('frontend.product_details', $product->id) }}">
                                <div class="portfolio-card-body">
                                    <div class="portfolio-card-header">
                                        <img src="{{ asset($product->image) }}" alt=""
                                            style="width: 100%; height: 250px">
                                    </div>
                                    <div class="portfolio-card-footer px-3">
                                        <h5 class="card-title mt-2">{{ $product->name }}</h5>
                                        <p class="card-text">
                                            {{ Illuminate\Support\Str::limit($product->short_description, 20) }}</p>
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
    </div> --}}
</section>
<!-- ======================= Products -->
@endsection
