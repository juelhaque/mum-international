@extends('frontend.layouts.app')
@push('front-css')
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/vendor/viewbox/viewbox.css') }}">
@endpush
@section('content')
    <section class="first-section p-0">
        <div class="container-fluid">
            <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                    @foreach ($sliders as $key => $slider)
                        <li data-target="#carousel-2" data-slide-to="{{ $key }}"
                            class="{{ $key == 0 ? 'active' : '' }}">
                        </li>
                    @endforeach
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach ($sliders as $key => $slider)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset($slider->image) }}" alt="responsive image" class="d-block img-fluid">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    {{-- <section class="p-0">
        <div class="container">
            <div class="row tiny-slider arrow-dark arrow-large arrow-transparent arrow-hover">
                <div class="col-sm-12 col-md-12 col-lg-12 tiny-slider-inner h-lg-400" data-autoplay="true"
                    data-autoplaytime="4000" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
                    <!-- slide 1-->

                    @foreach ($sliders as $slider)
                        <div class="h-100 bg-overlay-dark-2"
                            style="background-image:url({{ asset($slider->image) }}); background-position: center center; background-size: cover; min-height:360px">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ======================= Main banner -->

    <!-- ======================= about us  -->
    <section style="padding-bottom: 0px;padding-top: 0px; margin-top: 30px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div style="border-top: 12px solid #00a652;border-bottom: 12px solid #00a652;"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- left -->
                <div class="col-md-6">
                    <div class="">
                        <img class="img-fluid" src="{{ asset($company_profile->company_image) }}" alt=""
                            style="width: 100%;height: 100%;object-fit: cover;border-right:5px solid #00a652">
                    </div>
                </div>
                <!-- right -->
                <div class="col-md-6" style="text-align: justify;">
                    <h4 class="about-heading mt-md-2 mb-1"
                        style="">Welcome to
                        {{ $company_profile->about_title }}</h4>

                    <div  style="color: rgb(25, 26, 25); font-weight: 500;">
                        <p>{{ $company_profile->short_description }}</p>
                        <p>{!! Illuminate\Support\Str::limit($company_profile->about_description, 890, '...') !!}
                            <a href="{{ route('frontend.about') }}" class="btn btn-sm pb-0" style="color: rgb(7, 192, 7)">See
                                more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= about us  -->

    <!-- Product category slider start  -->
    <section style="background: #90ee90a1;">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center mb-3">
                    <h2 class="border-bottom text-center"><b>PRODUCT CATEGORIES</b></h2>
                </div>
                <div class="tiny-slider arrow-hover arrow-gray mt-2">
                    <div class="tiny-slider-inner" data-arrow="true" data-dots="false" data-autoplay="3800" data-gutter="20"
                        data-items-xl="7" data-items-lg="5" data-items-md="4" data-items-sm="3" data-items-xs="2">
                        @foreach ($categories as $category)
                            <div class="col-md-2 mb-3">
                                <a href="{{ route('frontend.catproduct', $category->id) }}">
                                    <div class="card portfolio-card">
                                        <div class="portfolio-card-header">
                                            <img class="item img-fluid" alt="100%x280" src="{{ asset($category->image) }}"
                                                style="width: 100%; height: 120px">
                                            <div class="card-body">
                                                <h6 class="card-title">{{ $category->name }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($categories->chunk(6) as $key => $category)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="row">
                                        @foreach ($category as $item)
                                            <div class="col-md-2 mb-3">
                                                <a href="{{ route('frontend.catproduct', $item->id) }}">
                                                    <div class="card">
                                                        <img class="img-fluid" alt="100%x280"
                                                            src="{{ asset($item->image) }}"
                                                            style="width: 163px; height: 108px">
                                                        <div class="card-body">
                                                            <h6 class="card-title">{{ $item->name }}</h6>

                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Product category slider end  -->

    <!-- ======================= Products -->
    <section class="portfolio pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center mb-0">
                    <h2 class="border-bottom text-center"><b>FEATURED PRODUCTS</b></h2>
                </div>
                <div class="col-md-12">
                    <div class="row portfolio-wrap grid">
                        <!-- portfolio-card -->
                        @foreach ($products as $product)
                            <div class="col-6 col-md-3 col-lg-2 portfolio-card isotope-item digital py-3">
                                <a style="color: var(--bs-body-color)"
                                    href="{{ route('frontend.product_details', $product->id) }}">
                                    <div class="portfolio-card-body" style="">
                                        <div class="portfolio-card-header">
                                            <img src="{{ asset($product->image) }}" alt=""
                                                style="">
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
            <div class="mb-2">
                <p class="text-end mb-3">
                    <a href="{{ route('frontend.product') }}" class="btn btn-red btn-sm mx-4">View All</a>
                </p>
            </div>
        </div>
    </section>
    <!-- ======================= Products -->

    <!-- Image gellary -->
    <section class="portfolio pb-3" style="background-color: #aaa6a68a">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center mb-0">
                    <h2 class="border-bottom text-center"><b>PHOTO GALLERY</b></h2>
                </div>
                <div class="col-md-12">
                    <div class="row gy-1 portfolio-wrap grid">
                        <!-- Image-card -->
                        @foreach ($photo_galleries as $photo_gallery)
                            <div class="col-6 col-md-3 col-lg-2 portfolio-card isotope-item digital py-3">
                                <div class="portfolio-card-body" style="position: relative">
                                    <div class="portfolio-card-header">
                                        <img src="{{ asset($photo_gallery->image) }}" alt=""
                                            style="background: #fff; height:180px; object-fit: fill; border:1px solid #00a652">
                                    </div>
                                    <div class="portfolio-card-footer">
                                        <a class="full-screen" href="{{ asset($photo_gallery->image) }}"
                                            data-glightbox="" data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
                                    </div>
                                    <a href="{{ asset($photo_gallery->image) }}" class="image-link" style="position: absolute;top: 0;left: 0;bottom: 0;right: 0;display: block;z-index:999"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <p class="text-end mb-3">
                    <a href="{{ route('frontend.photo_gallery') }}" class="btn btn-red btn-sm mx-4">View All</a>
                </p>
            </div>
        </div>
    </section>
    <!-- ======================= Image gellary -->

    <!-- Client slider start  -->
    <section style="background: #343a40; padding-bottom: 4px;">
        <div class="container-fluid mb-4">
            <div class="row">
                <div class="d-flex justify-content-center mb-3">
                    <h2 class="border-bottom-client text-center"><b style="color: white">OUR CLIENTS</b></h2>
                </div>
                <div class="tiny-slider arrow-hover arrow-gray mb-2">
                    <div class="tiny-slider-inner" data-arrow="true" data-dots="false" data-autoplay="3800"
                        data-gutter="20" data-items-xl="7" data-items-lg="5" data-items-md="4" data-items-sm="3"
                        data-items-xs="2">
                        @foreach ($clients as $client)
                            <div class="item img-fluid"><img src="{{ asset($client->image) }}"
                                    style="height: 108px; width: 100%;" alt=""></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client slider end  -->


    {{-- Video Gallery section --}}
    <section class="mb-3 mt-4">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-4">
                <h2 class="border-bottom text-center"><b>VIDEO GALLERY</b></h2>
            </div>
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                @foreach ($video_galleries as $video_gallery)
                    <div class="col">
                        <div class="text-center">
                            <div class="card-img-top d-md-block">
                                <iframe class="video-frame" style="width:100%;" src="{{ asset($video_gallery->video) }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('front-js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('ui/frontend/assets/vendor/viewbox/viewbox.min.js') }}"></script>
    <script>
        $(function(){
            $('.image-link').viewbox();
        });
    </script>
@endpush
