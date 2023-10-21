@extends('frontend.layouts.app')
@section('content')
    <!-- News-details -->
    <section class="hero-wrap hero-wrap-2" style="margin-top: 100px">
        <!-- <div class="overlay"></div> -->
        <div class="container">
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
    <section class="ftco-section ftco-degree-bg pt-0 mx-3 mt-2 mb-4">
        <div class="container-fluid ml-2">
            <div class="row">
                <div class="col-md-8 p-2" style="box-shadow: 0 0 3.125rem rgba(0, 0, 0, 0.2);">
                    <div class="ftco-animate p-2">
                        <h3 class="text-start">{{ $news_events->name }}</h3>
                    </div>
                    <div class="ftco-animate p-2">
                        <img src="{{ asset($news_events->image) }}" alt="" class="img-fluid sigle_image"
                            style="width: 100%; height: 450px; object-fit: contain;">
                    </div>
                    <div class="ftco-animate p-2 mt-3">
                        <p class="text-start" style="color: rgb(41, 40, 40)">{{ $news_events->description }}</p>
                    </div>
                </div>
                <div class="col-md-4 px-4 mt-20">
                    <div class="mb-3">
                        <h5 class="text-center" style="font-size: 25px">More News and Events</h5>
                    </div>
                    <div class="row">
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
                    </div>
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

{{-- {{ route('frontend.product_details', $news_events->id) }} --}}
{{-- <a href="{{ route('frontend.product_details', $news_events->id) }}"
    class="btn btn-sm">See more</a> --}}

{{-- <div class="col-md-6 ftco-animate">
        <div class="sidebar-box ftco-animate">
            <div class="categories">
                <p><strong>Product Name :</strong>{{$products->name}}</p>
                <p><strong>Category :</strong> Hair Care</p>
                <p><strong>Product Code :</strong>{{$products->product_code}}</p>
                <div class="p-1">
                    <p>{{ $news_events->description }}</p>
                </div>
            </div>
        </div>
    </div> --}}

{{-- <div class="row">
                <div class="col-lg-9 p-2">
                    <div>
                        <p>{{ $news_events->description }}</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div> --}}
