<footer class="footer bg-dark pt-3">
    <div class="footer-content">
        {{-- style="height: 250px;" --}}
        <div class="container-fluid">
            <div class="row">
                <!-- Footer widget 1 -->
                <div class="col-md-4 mt-3">
                    <div class="widget">
                        <a href="{{ route('frontend.home') }}" class="footer-logo">
                            <!-- footer logo Start -->
                            {{-- <img class="footer-logo-item" src="{{ asset($company_profile->company_logo) }}"alt="Logo"> --}}
                            <div class="d-flex justify-content-start mb-3">
                                <img class="navbar-brand-item" style="border-radius: 2px" src="{{ asset($company_profile->company_logo) }}" alt="Logo">
                                <h3 class="p-2 navbar-brand-item" style="color: whitesmoke; width: 300px;"><b>Mum International</b></h3>
                            </div>
                            <!-- footer logo End -->
                        </a>
                        {{-- <p class="mt-3">{!! $company_profile->about_description !!}</p> --}}
                        <p class="font">{{ $company_profile->short_description }}</p>
                    </div>
                </div>
                <!-- Footer widget 2 -->
                <div class="col-md-4 col-sm-6 mt-3">
                    <div class="widget address">
                        <h4 class="border-bottom-foot mb-4">Contact information</h4>
                        <ul class="list-group list-group-borderless font">
                            <li class="d-flex mb-2"><i
                                    class="me-3 mt-1 display-9 ti-map-alt"></i>{{ $company_profile->address }}</li>
                            <li class="d-flex mb-2"><i
                                    class="me-3 mt-1 display-9 ti-headphone-alt"></i>{{ $company_profile->phone }}</li>
                            <li class="d-flex mb-2"><i class="me-3 mt-1 display-9 ti-email"></i>{{ $company_profile->email }}
                            </li>
                            <li class="d-flex mb-2"><i class="me-3 mt-1 display-9 ti-time"></i>
                                <p>Sun - Thu: <strong>09:00 - 21:00</strong> <br>Fri & Sat: <strong>Closed</strong></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Footer widget 3 -->
                <div class="col-md-2 col-sm-6 d-flex justify-content-center mt-3">
                    <div class="widget">
                        <h4 class="mb-3" style="color: white; border-bottom: 2px solid#fff;">Useful LInks</h4>
                        <ul class="nav flex-column primary-hover font">
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.about') }}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.contact') }}">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.product') }}">Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.photo_gallery') }}">Photo Gallery</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer widget 4 -->
                <div class="col-md-2 d-flex justify-content-center mt-3">
                    <div class="ftco-footer-widget mb-4" style="margin-right: 2rem">
                        <h4 class="ftco-heading-2 mb-3" style="color: white; border-bottom: 2px solid#fff;">Follow Us</h4>
                        <ul class="list-group list-group-borderless primary-hover font">
                            <li class="d-flex mb-2"><a style="color: #fff" href="{{ $company_profile->facebook }}" target="_blank"><i
                                        class="me-3 display-9 fab fa-facebook-f"></i>Facebook</a></li>
                            <li class="d-flex mb-2"><a style="color: #fff" href="{{ $company_profile->twitter }}" target="_blank"><i
                                        class="me-3 display-9 fab fa-twitter"></i>Twitter</a></li>
                            <li class="d-flex mb-2"><a style="color: #fff" href="{{ $company_profile->instagram }}" target="_blank"><i
                                        class="me-3 display-9 fab fa-instagram"></i>Instagram</a></li>
                            <li class="d-flex mb-2"><a style="color: #fff" href="{{ $company_profile->linkedin }}" target="_blank"><i
                                        class="me-3 display-9 fab fa-linkedin"></i>Linkedin</a></li>
                            <li class="d-flex mb-2"><a style="color: #fff" href="{{ $company_profile->youtube }}" target="_blank"><i
                                        class="me-3 display-9 fab fa-youtube"></i>Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider mt-1"></div>
    <!--footer copyright -->
    <div class="footer-copyright py-0" style="background: #23262b">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center py-3 text-center text-md-start">
                <!-- copyright text -->
                <div class="copyright-links">© Copyright <a href="http://muminternational.com/" target="_blank"><b>Mum International</b></a> All rights reserved </div>
                <!-- copyright links-->
                <div class="copyright-links primary-hover mt-3 mt-md-0">
                    <div>Design & Developed by <a href="https://linktechbd.com/" target="_blank"><b>Link-Up Technology Ltd</b></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
