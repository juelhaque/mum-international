@extends('frontend.layouts.app')
@section('content')

<section class="first-section hero-wrap hero-wrap-2">
    <!-- <div class="overlay"></div> -->
    <div class="container-fluid">
        <div class="row align-items-start justify-content-start" style="box-shadow: 0px 15px 10px -15px #03a503;">
            <div class="col-md-6 ftco-animate pb-0 text-start">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ route('frontend.home') }}">Home <i class="fas fa-angle-right"></i></a></span>
                     {{-- <span class="mr-2"><a href="{{ route('frontend.news_event') }}">New & Events <i class="fas fa-angle-right"></i></a></span> --}}
                    <span>About {{ $company_profile->about_title }} <i class="fas fa-angle-right"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ======================= about us  -->
<section>
    <div class="container-fluid mb-5">
        {{-- <div class="d-flex justify-content-center mb-3">
			<h2 class="heading"><b>ABOUT MUM-INTERNATIONAL</b></h2>
		</div> --}}
        <div class="row">
            <div class="col-md-12">
                <div style="border-top: 12px solid #00a652;border-bottom: 12px solid #00a652;"></div>
            </div>
        </div>
        <div class="row">
            <!-- left -->
            <div class="col-md-6 ps-lg-5 pt-3" style="text-align: justify;">
                <p><span class="welcome-text" style="font-weight: bolder;color: #00a652; text-transform: uppercase;">Welcome to {{ $company_profile->about_title }}</span></p>
                <div  style="color: rgb(25, 26, 25); font-weight: 500;">
                    <p>{{ $company_profile->short_description }}</p>
                    <p>{!! $company_profile->about_description !!}</p>
                </div>
            </div>
            <!-- right -->
            <div class="col-md-6 ps-lg-5">
                <div class="row">
                    <img class="img-fluid" src="{{ asset($company_profile->company_image) }}" alt=""
                    style="width: 100%; height: 100%; object-fit: cover; border-left:5px solid #00a652">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= about us  -->
@endsection
