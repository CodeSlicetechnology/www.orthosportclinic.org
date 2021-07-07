<header class="header-area fixed-top">
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-9 col-sm-6">
                    <ul class="header-content-left">
                        <li>
                            <a href="javascript::void(0)">
                                <i class="bx bx-time"></i>
                                {{ $data['contactDetails']->timings }}
                            </a>
                        </li>
                        <li>
                            <a href="tel:+{{ $data['contactDetails']->country_code }}{{ $data['contactDetails']->phone }}">
                                <i class="bx bx-phone-call"></i>
                                Call Us: (+{{ $data['contactDetails']->country_code }}) {{ $data['contactDetails']->phone }}
                            </a>
                        </li>
                        <li>
                            <a
                                href="mailto:{{ $data['contactDetails']->email }}">
                                <i class="bx bxs-paper-plane"></i>
                                Email: {{ $data['contactDetails']->email }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <ul class="header-content-right">
                        <li>
                            <a target="_blank" href="https://m.facebook.com/107515764727481/">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.youtube.com/channel/UCTCny3Z2uc0cEupMBcmVNiQ">
                                <i class="bx bxl-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/orthosportclinic.india/">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/ORTHOSPORTCLINC">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-area four">
        <div class="navbar-area">
            <div class="mobile-nav">
                <a href="{{ route('/') }}" class="logo">
                    <img src="{{ asset('website/img/logo.png') }}??v=1.1" alt="Logo">
                </a>
            </div>
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('/') }}">
                            <img src="{{ asset('website/img/logo.png') }}??v=1.1" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ route('/') }}" class="nav-link {{ $page == 'home' ? 'active' : '' }}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link {{ $page == 'about' ? 'active' : '' }}">About Dr. Alva</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('conditions-and-treatments') }}" class="nav-link {{ $page == 'condTrt' ? 'active' : '' }}">Conditions & Treatments</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('clinical-images') }}" class="nav-link {{ $page == 'clinicalImg' ? 'active' : '' }}">Clinical Images</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('blogs') }}" class="nav-link {{ $page == 'blogs' ? 'active' : '' }}">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript::void(0);" class="nav-link dropdown-toggle {{ $page == 'gallery' ? 'active' : '' }}">
                                        Gallery
                                        <i class="bx bx-plus"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ route('gallery/images') }}" class="nav-link">Images</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('gallery/videos') }}" class="nav-link">Videos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link {{ $page == 'contact' ? 'active' : '' }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>