@extends('frontend.layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2" style="margin-top: 100px">
    <!-- <div class="overlay"></div> -->
    <div class="container-fluid">
        <div class="row align-items-start justify-content-start" style="box-shadow: 0px 15px 10px -15px #03a503;">
            <div class="col-md-6 ftco-animate pb-0 text-start">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ route('frontend.home') }}">Home <i class="fas fa-angle-right"></i></a></span>
                    {{-- <span class="mr-2"><a href="{{ route('frontend.news_event') }}">New & Events <i class="fas fa-angle-right"></i></a></span> --}}
                    <span> Photo Gallery <i class="fas fa-angle-right"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Image gellary -->
<section class="portfolio pb-2">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center mb-2">
                <h2 class="border-bottom text-center"><b>PHOTO GALLERY</b></h2>
            </div>
            <div class="col-md-12">
                <div class="row gy-3 portfolio-wrap grid items-5">
                    <!-- Image-card -->
                    @foreach ($photo_galleries as $photo_gallery)
                        <div class="col-md-2 portfolio-card isotope-item digital py-3">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="{{ asset($photo_gallery->image) }}" alt=""
                                        style="height: 180px; width: 100%; border: 1px solid #00a652">
                                </div>
                                <div class="portfolio-card-footer">
                                    <a class="full-screen" href="{{ asset($photo_gallery->image) }}"
                                        data-glightbox="" data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center mb-3">
                <h2 class="heading"><b>PHOTO GALLERY</b></h2>
            </div>
            <div class="col-md-12 p-0 mb-4">
                <div class="portfolio-wrap grid items-5 items-padding">
                    <!-- Image-card -->
                    @foreach ($photo_galleries as $photo_gallery)
                        <div class="portfolio-card isotope-item digital">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="{{ asset($photo_gallery->image) }}" alt=""
                                        style="width: 258px; height: 172px">
                                </div>
                                <div class="portfolio-card-footer">
                                    <a class="full-screen" href="{{ asset($photo_gallery->image) }}" data-glightbox=""
                                        data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
</section>
<!-- =======================
Image gellary -->
@endsection
