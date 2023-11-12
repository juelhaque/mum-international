@extends('frontend.layouts.app')
@push('front-css')
    <link rel="stylesheet" href="{{ asset('ui/frontend/assets/vendor/viewbox/viewbox.css') }}">
@endpush
@section('content')
<section class="first-section hero-wrap hero-wrap-2">
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
                <div class="row gy-3 portfolio-wrap grid">
                    <!-- Image-card -->
                    @foreach ($photo_galleries as $photo_gallery)
                        <div class="col-6 col-md-2 portfolio-card isotope-item digital py-3">
                            <div class="portfolio-card-body">
                                <div class="portfolio-card-header">
                                    <img src="{{ asset($photo_gallery->image) }}" alt=""
                                        style="height: 180px; width: 100%; border: 1px solid #00a652">
                                </div>
                                {{-- <div class="portfolio-card-footer">
                                    <a class="full-screen" href="{{ asset($photo_gallery->image) }}"
                                        data-glightbox="" data-gallery="portfolio"><i class="ti-fullscreen"></i></a>
                                </div> --}}
                                <a href="{{ asset($photo_gallery->image) }}" class="image-link"
                                    style="position: absolute;top: 0;left: 0;bottom: 0;right: 0;display: block;z-index:999"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= Image gellary -->
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
