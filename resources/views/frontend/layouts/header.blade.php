<header class="header-static navbar-light">
    <!-- Navbar top start-->
    <div class="navbar-top d-none d-lg-block">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center" style="background-color:#343a40">
                <!-- navbar top Left-->
                <div class="d-flex align-items-center">
                    <!-- Top info -->
                    <ul class="nav list-unstyled ms-3 primary-hover">
                        <li class="nav-item me-3">
                            <a class="navbar-link" href="tel:01735-822661"><strong><i
                                        class="me-1 fa fa-phone"></i></strong>{{ $company_profile->phone }}</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="navbar-link" href="mailto:mumint.bd2018@gmail.com"><strong><i
                                        class="me-1 fa fa-envelope"></i></strong>{{ $company_profile->email }}</a>
                        </li>
                    </ul>
                </div>

                <!-- navbar top Right-->
                <div class="d-flex align-items-center">
                    <!-- top social -->
                    <ul class="social-icons">
                        <li class="social-icons-item social-facebook m-0">
                            <a class="social-icons-link w-auto px-2" href="{{ $company_profile->facebook }}"
                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="social-icons-item social-twitter m-0">
                            <a class="social-icons-link w-auto ps-2" href="{{ $company_profile->twitter }}"
                                target="_blank"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-icons-item social-instagram m-0">
                            <a class="social-icons-link w-auto px-2" href="{{ $company_profile->instagram }}"
                                target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="social-icons-item social-linkedin m-0">
                            <a class="social-icons-link w-auto px-2" href="{{ $company_profile->linkedin }}"
                                target="_blank"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li class="social-icons-item social-youtube m-0">
                            <a class="social-icons-link w-auto px-2" href="{{ $company_profile->youtube }}"
                                target="_blank"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar top End-->

    <!-- Logo Nav Start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid" style="background-color: #00a652;">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('frontend.home') }}">
                <div class="d-flex justify-content-start text-center" style="height: 35px;">
                    <img class="navbar-brand-item" style="border-radius: 2px"
                        src="{{ asset($company_profile->company_logo) }}" alt="Logo">
                    <h3 class="logo-text"><span id="typed"></span></h3>
                    {{-- <h3 class="logo-text">{{ $company_profile->about_title }}</h3> --}}
                </div>
            </a>
            <!-- Menu opener button -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Main Menu Start -->
            <div class="collapse navbar-collapse bg-green" id="navbarCollapse" style="width: fit-content; ">
                <ul class="navbar-nav navbar-nav-scroll navbar-nav-scroll ms-auto pt-2">
                    <!-- Menu item 2 Blog-->
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('frontend.home') }}" id="blogMenu" aria-haspopup="true"
                            aria-expanded="false"><span class="nav-button">Home</span></a>
                    </li>
                    <!-- Menu item 3 Pages-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('frontend.about') }}" id="pagesMenu" aria-haspopup="true"
                            aria-expanded="false"><span class="nav-button"> About Us</span></a>
                    </li>
                    <!-- Menu item 4 Portfolio-->

                    @php
                        $categories = \App\Models\Category::latest()->get();
                    @endphp

                    {{-- <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('frontend.catproduct', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div> --}}


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="portfolioMenu" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><span class="nav-button">Product</span></a>
                        <ul class="dropdown-menu" aria-labelledby="portfolioMenu">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('frontend.catproduct', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- Menu item 5 Elements-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('frontend.photo_gallery') }}" id="pagesMenu"
                            aria-haspopup="true" aria-expanded="false"><span class="nav-button">Photo
                                Gallery</span></a>
                    </li>
                    <!-- Menu item 5 Elements-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('frontend.news_event') }}" id="pagesMenu"
                            aria-haspopup="true" aria-expanded="false"><span class="nav-button">News &
                                Event</span></a>
                    </li>
                    <!-- Menu item 6 Docs-->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('frontend.contact') }}" id="pagesMenu"
                            aria-haspopup="true" aria-expanded="false"><span class="nav-button">Contact Us</span></a>
                    </li>
                </ul>
            </div>
            <!-- Main Menu End -->
        </div>
    </nav>
    <!-- Logo Nav End -->
</header>


@push('front-js')

@endpush
