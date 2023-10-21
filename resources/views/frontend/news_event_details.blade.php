@extends('frontend.layouts.app')
@section('content')
    <!-- News-details -->
    <section class="hero-wrap hero-wrap-2" style="margin-top: 100px">
        <!-- <div class="overlay"></div> -->
        <div class="container-fluid">
            <div class="row align-items-start justify-content-start">
                <div class="col-md-6 ftco-animate pb-0 text-start">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="{{ route('frontend.home') }}">Home<i
                                    class="fas fa-angle-right"></i></a></span> <span class="mr-2"><a
                                href="{{ route('frontend.news_event') }}">New & Events <i
                                    class="fas fa-angle-right"></i></a></span>
                        <span>{{ $news_events->name }}<i class="fas fa-angle-right"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-degree-bg pt-0 mt-2 mb-4">
        <div class="container-fluid">
            <div class="row" style="margin-left: 0.1rem; margin-right: 0.1rem;">
                <div class="col-md-8" style="box-shadow: 0 0 3.125rem rgba(0, 0, 0, 0.2);">
                    <div class="ftco-animate">
                        <h3 class="text-center pt-2">{{ $news_events->name }}</h3>
                    </div>
                    <div class="ftco-animate">
                        <img src="{{ asset($news_events->image) }}" alt="" class="img-fluid sigle_image"
                            style="width: 50%; height: 450px; object-fit: contain; float: left;">
                    </div>
                    <div class="ftco-animate mt-3">
                        <p class="text-start" style="color: rgb(41, 40, 40)">{{ $news_events->description }}</p>
                    </div>
                </div>
                <div class="col-md-4 mt-20">
                    <div class="mb-3">
                        <h5 class="text-center" style="font-size: 25px">More News and Events</h5>
                    </div>
                    <div class="row" style="margin-left: 0.5rem">
                        @foreach ($more_news_events as $news_events)
                            <div class="col-12 mb-3" style="box-shadow: 0 0 1.125rem rgba(0, 0, 0, 0.2);">
                                <a href="{{ route('frontend.news_event_details', $news_events->id) }}">
                                    <div class="portfolio-card">
                                        <div class="row portfolio-card-header">
                                            <div class="col-4">
                                                <img style="width: 100%; height: 83px" src="{{ asset($news_events->image) }}"
                                                    alt="Image">
                                            </div>
                                            <div class="col-8 py-3">
                                                <h5 style="font-size: 14px;">{{ $news_events->name }}</h5>
                                                <h6 class="mb-0" style="font-size: 11px; padding-right: 2px;">
                                                    {{ Illuminate\Support\Str::limit($news_events->description, 50) }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="row">
                        @foreach ($more_news_events as $news_events)
                            <div class="col-12 mb-3" style="box-shadow: 0 0 3.125rem rgba(0, 0, 0, 0.2);">
                                <a class="row" href="{{ route('frontend.news_event_details', $news_events->id) }}">
                                    <div class="col-4">
                                        <img style="width: 100%; height: 83px" src="{{ asset($news_events->image) }}"
                                            alt="Image">
                                    </div>
                                    <div class="col-8 py-3">
                                        <h5 style="font-size: 14px;">{{ $news_events->name }}</h5>
                                        <p class="mb-0" style="font-size: 11px">
                                            {{ Illuminate\Support\Str::limit($news_events->description, 50) }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div> --}}
                    {{-- <div class="">
                        <div class="p-2 mb-3">
                            <h5 class="text-center">More News and Events</h5>
                        </div>
                        <div class="row">
                            @foreach ($more_news_events as $news_events)
                            <div class="col-md-4">
                                <img src="{{ asset($news_events->image) }}" alt="Image" style="width: 120px; height: 100px">
                            </div>
                            <div class="col-md-8">
                                <h5 class="">{{ $news_events->name }}</h5>
                                <p class="mb-0">{{ Illuminate\Support\Str::limit($news_events->description, 50) }}</p>
                                <a href="{{ route('frontend.news_event_details', $news_events->id) }}" class="btn btn-sm" style="">See more...</a>
                            </div>
                            @endforeach
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection


