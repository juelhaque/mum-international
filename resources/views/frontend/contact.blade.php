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
                        <span> Contact Us <i class="fas fa-angle-right"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================v contact -->
    <section class="contact-page">
        <div class="container-fluid">
            @include('message')
            <div class="d-flex justify-content-center mb-4">
                <h2 class="heading"><b>CONTACT WITH US</b></h2>
            </div>
            <div class="row mb-5">
                <div class="col-6 col-md-4">
                    <div class="dbox w-100 text-center">
                        <div class="icon">
                            <span class="fas fa-map-marker-alt"></span>
                        </div>
                        <div class="text">
                            <strong>Address:</strong>
                            <p>{{ $company_profile->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="dbox w-100 text-center">
                        <div class="icon">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="text">
                            <strong>Phone:</strong>
                            <p>{{ $company_profile->phone }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="dbox w-100 text-center ">
                        <div class="icon">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="text">
                            <strong>Email:</strong>
                            <p><span>{{ $company_profile->email }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mb-5">
                <!-- google map -->
                <div class="col-md-6">
                    <div class="h-100">
                        <h3 class="text-center mb-3">Our Location</h3>
                        <iframe class="w-100 h-90 rounded"
                            src="{{asset($maps->map)}}"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <!-- contact form -->
                <div class="col-md-6">
                    <div class="h-100">
                        <h3 class="text-center mb-3">Contact Us</h3>
                        <p>Get in touch with us to see how we can help you</p>
                        <form class="contact-form needs-validation" id="contact-form" name="contactform" method="POST"
                            action="{{route('messages.store')}}" novalidate>
                            @csrf
                            <!-- Main form -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- name -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Name">
                                            @error('name')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- email -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="E-mail">
                                            @error('email')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Subject -->
                                    <div class="mb-3 position-relative">
                                        <input required id="con-subject" name="subject" type="text" class="form-control @error('subject') is-invalid @enderror"
                                            placeholder="Subject">
                                            @error('subject')
                                                <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Message -->
                                    <div class="mb-3 position-relative">
                                        <textarea required id="con-message" name="message" cols="40" rows="6" class="form-control @error('message') is-invalid @enderror"
                                            placeholder="Message"></textarea>
                                            @error('message')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                                <!-- submit button -->
                                <div class="col-md-12 d-grid">
                                    <button class="btn btn-dark m-0" type="submit" style="background: rgb(194, 194, 194); color: #373838;">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= contact -->
@endsection
