<header class="header-area fixed-top">
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-9 col-sm-6">
                    <ul class="header-content-left">
                        <li>
                            <a href="javascript::void(0)">
                                <i class="bx bx-time"></i>
                                Mon-Fri 9am-6pm
                            </a>
                        </li>
                        <li>
                            <a href="tel:+917619633407">
                                <i class="bx bx-phone-call"></i>
                                Call Us: (+91) 761 963 3407
                            </a>
                        </li>
                        <li>
                            <a
                                href="mailto:clinicorthosport@gmail.com">
                                <i class="bx bxs-paper-plane"></i>
                                Email: clinicorthosport@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <ul class="header-content-right">
                        <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-instagram"></i>
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
                    <img src="{{ asset('website/img/logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('/') }}">
                            <img src="{{ asset('website/img/logo.png') }}" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ route('/') }}" class="nav-link active">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">About Dr. Alva</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('/') }}#cmProcedures" class="nav-link">Common Procedures</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('conditions-and-treatments') }}" class="nav-link">Conditions & Treatments</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>