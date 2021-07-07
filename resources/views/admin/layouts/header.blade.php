<nav class="navbar horizontal-layout-2 col-lg-12 col-12 p-0 d-flex flex-row align-items-start">
    <div class="container">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="{{ route('/home') }}">
            <img class="h-100" src="{{ asset('website/img/logo.png') }}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ route('/home') }}">
            <h4>PD</h4>
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center pr-0">
            <ul class="navbar-nav ml-auto dropdown-menus">
                <li class="nav-item dropdown mr-0">
                    <a class="nav-link count-indicator dropdown-toggle py-0 pr-0" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="text-black d-none d-lg-inline-block text-white mr-2">{{ Auth()->user()->name }}</span>
                        <img class="img-xs rounded-circle" src="{{ asset('admin/images/faces-clipart/pic-4.png') }}" alt="profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-3 pb-3" aria-labelledby="messageDropdown">
                        <a href="{{ route('change-password') }}" class="dropdown-item {{ $page == 'changepasswordPage' ? 'active' : '' }}">
                            Change Password
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form> 
                    </div>
                </li>
            </ul>
            <button type="button" class="navbar-toggler d-block d-md-none">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>
    </div>
    <div class="container">
        <div class="nav-bottom">
            <ul class="navbar-nav">
                <li class="nav-item dropdown {{ $page == 'landingPage' ? 'active' : '' }}">
                    <a class="nav-link count-indicator dropdown-toggle" id="landing-dropdown" href="#" data-toggle="dropdown">
                    Landing Page
                    </a>
                    <div class="dropdown-menu dropdown-left navbar-dropdown" aria-labelledby="landing-dropdown">
                        <ul>
                            <li class="dropdown-item">
                                <a href="{{ route('/home') }}" class="dropdown-link">Banner</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('about-landing') }}" class="dropdown-link">About Dr.Alva</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('common-procedures') }}" class="dropdown-link">Common Procedures</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown {{ $page == 'aboutPage' ? 'active' : '' }}">
                    <a class="nav-link count-indicator dropdown-toggle" id="about-dropdown" href="#" data-toggle="dropdown">
                    About Dr. Alva
                    </a>
                    <div class="dropdown-menu dropdown-left navbar-dropdown" aria-labelledby="about-dropdown">
                        <ul>
                            <li class="dropdown-item">
                                <a href="{{ route('about-first-section') }}" class="dropdown-link">Section One</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('about-second-section') }}" class="dropdown-link">Section Two</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown {{ $page == 'cndTrtPage' ? 'active' : '' }}">
                    <a class="nav-link count-indicator" href="{{ route('conditions-treatments-list') }}">
                    Conditions & Treatments
                    </a>
                </li>
                <li class="nav-item dropdown {{ $page == 'imagesPage' ? 'active' : '' }}">
                    <a class="nav-link count-indicator dropdown-toggle" id="images-dropdown" href="#" data-toggle="dropdown">
                    Images
                    </a>
                    <div class="dropdown-menu dropdown-left navbar-dropdown" aria-labelledby="images-dropdown">
                        <ul>
                            <li class="dropdown-item">
                                <a href="{{ route('association-images') }}" class="dropdown-link">Associations</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('rp-screenshots') }}" class="dropdown-link">Research & Publication Screenshots</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('view-clinical-images') }}" class="dropdown-link">Clinical</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('gallery-images') }}" class="dropdown-link">Gallery</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown {{ $page == 'videoPage' ? 'active' : '' }}">
                    <a class="nav-link count-indicator" href="{{ route('gallery-videos') }}">
                    Video
                    </a>
                </li>
                <li class="nav-item dropdown {{ $page == 'blogsPage' ? 'active' : '' }}">
                    <a class="nav-link count-indicator" href="{{ route('blogs-list') }}">
                    Blogs
                    </a>
                </li>
                <li class="nav-item dropdown {{ $page == 'contactPage' ? 'active' : '' }}">
                    <a class="nav-link count-indicator dropdown-toggle" id="contact-dropdown" href="#" data-toggle="dropdown">
                    Manage Contact
                    </a>
                    <div class="dropdown-menu dropdown-left navbar-dropdown" aria-labelledby="contact-dropdown">
                        <ul>
                            <li class="dropdown-item">
                                <a href="{{ route('update-contact') }}" class="dropdown-link">Update Contact Details</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('contacted-users') }}" class="dropdown-link">Contacted Users</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="{{ route('manage-address') }}" class="dropdown-link">Manage Address</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>