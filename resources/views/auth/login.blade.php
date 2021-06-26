<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Ortho Sport Clinic  - Login</title>
  
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->

  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
  <!-- endinject -->
  
  <link rel="shortcut icon" href="{{ asset('website/img/logo.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper auth p-0 theme-two">
        <div class="row d-flex align-items-stretch">
          <div class="col-md-4 banner-section d-none d-md-flex align-items-stretch justify-content-center">
            <div class="slide-content bg-1">
            </div>
          </div>
          <div class="col-12 col-md-8 h-100 bg-white">
            <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column pt-2">
              <img class="mb-4 text-center" src="{{ asset('website/img/logo.png') }}" alt="logo" />
              <form autocomplete="off" method="POST" action="{{ route('login') }}" id="signInForm">
                @csrf

                @if ($errors->has('email'))
                    <p class="text-danger mb-2 font-weight-normal pt-2" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </p>
                @endif

                @if ($errors->has('password'))
                    <p class="text-danger mb-2 font-weight-normal pt-2" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </p>
                @endif
                
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                    </div>
                    <input autocomplete="off" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-Mail Address">
                  </div>
                  <label id="email-error" class="error mt-2 text-danger" for="email" style="display: none;">Please enter a email address</label>
                </div>
                
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                    </div>
                    <input autocomplete="off" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">
                  </div>
                  <label id="password-error" class="error mt-2 text-danger" for="password" style="display: none;">Please provide a password</label>
                </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn">SIGN IN</button>
                </div>

                <div class="wrapper mt-5 text-gray">
                  <p class="footer-text">Copyright © {{ date('Y') }} <a target="_blank" href="{{ route('/') }}">Orthosport Clinic<sup>TM</sup></a>. All rights reserved.</p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('admin/vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/js/misc.js') }}"></script>
  <script src="{{ asset('admin/js/settings.js') }}"></script>
  <script src="{{ asset('admin/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin/js/form-validation.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>