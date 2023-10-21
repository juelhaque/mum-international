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
                        <span> News & Events <i class="fas fa-angle-right"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Products -->
    <section class="portfolio pb-0">
        <!-- Featured News Slider Start -->
        <div class="container-fluid pt-2 mb-5">
            <div class="mb-3">
                <h4 class="text-uppercase font-weight-bold text-center" style="font-size: 35px">Featured News</h4>
            </div>
            <div class="row">
                @foreach ($news_events as $news_event)
                    <div class="col-lg-3">
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <a style="display:inline-block" href="{{ route('frontend.news_event_details', $news_event->id) }}">
                                <img src="{{ asset($news_event->image) }}" style="object-fit: fill;">
                                <div class="overlay">
                                    <div class="">
                                        <p class="p-2 mr-2"
                                            style="color: #212529; background-color: #00ff14">
                                            <b>{{ $news_event->name }}</b></p>
                                    </div>
                                    <p class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                        >{{ Illuminate\Support\Str::limit($news_event->description, 50) }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container-fluid">
            <div class="row" style="margin-left: 0.8rem; margin-right: 2px;">
                <div class="col-lg-9 pr-3">
                    <h4 class="pb-2 text-uppercase font-weight-bold text-center" style="font-size: 30px">Latest News</h4>
                    <div class="row" style=" border-radius: 2px;">
                        {{-- <div class="col"> --}}
                        @foreach ($news_events as $news_event)
                            <div class="row mb-4" style="box-shadow: 0 0 1.125rem rgba(0, 0, 0, 0.1);">
                                <div class=" col-md-6 ">
                                    <img class="img-fluid " src="{{ asset($news_event->image) }}"
                                        style="height: 300px; width: 100%; object-fit: contain;">
                                </div>
                                <div class="col-md-6 d-flex flex-column  bg-white">
                                    <div class=" py-4">
                                        <div class="">
                                            <div class="">
                                                <a class="p-2 mr-2" style="color: #212529; background-color: #00ff14">
                                                    <b>{{ $news_event->name }}</b></a>
                                            </div>
                                            <p class="my-2" style="color: #212529">
                                                {{ Illuminate\Support\Str::limit($news_event->description, 700) }}
                                                <a href="{{ route('frontend.news_event_details', $news_event->id) }}"
                                                    class="btn btn-sm pb-0" style="color: rgb(7, 192, 7)">See more</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="mb-3">
                        <h5 class="text-center" style="font-size: 25px">More News and Events</h5>
                    </div>
                    <div class="row">
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
                </div>
            </div>
        </div>



        {{-- <div class="col-md-12 p-0 mb-5">
                    <div class="portfolio-wrap grid items-3 items-padding">
                        @foreach ($news_events as $news_event)
                            <div class="portfolio-card isotope-item digital">
                                <a style="color: black" href="{{ route('frontend.news_event_details', $news_event->id) }}">
                                    <div class="portfolio-card-body">
                                        <div class="portfolio-card-header">
                                            <img src="{{ asset($news_event->image) }}" alt=""
                                                style="width: 351px; height: 350px">
                                        </div>
                                        <div class="portfolio-card-footer p-3">
                                            <h5 class="card-title mt-3 mb-2">{{ $news_event->name }}</h5>
                                            <p class="card-text">
                                                {{ Illuminate\Support\Str::limit($news_event->description, 120) }}
                                            </p>
                                        </div>
                                        <a href="{{ route('frontend.news_event_details', $news_event->id) }}"
                                            class="btn btn-sm btn-success m-3">Read More</a>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
    </section>
@endsection
