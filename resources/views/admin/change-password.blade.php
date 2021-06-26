@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-4 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
        <div class="card-header border-0 px-0">
            <h4 class="card-subtitle text-center pt-2">
            <span><strong>Change Password</strong></span>
            </h4>                   
        </div>         

        <div class="card-content">
            <div class="card-body">

            @if (session('error'))
                <div class="alert alert-danger">
                {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                {{ session('success') }}
                </div>
            @endif

             @if ($errors->has('current-password'))
                <div class="alert alert-danger">
                {{ $errors->first('current-password') }}
                </div>
            @endif
            @if ($errors->has('new-password'))
                <div class="alert alert-danger">
                {{ $errors->first('new-password') }}
                </div>
            @endif

            <form id="changePasswordForm" method="POST" action="{{ URL('changePassword') }}" class="form-horizontal">
                @csrf
                
                <fieldset class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }} position-relative has-icon-left">
                    <input id="current-password" type="password" class="form-control" placeholder="Current Password" name="current-password" required>
                    <div class="form-control-position">
                        <i class="la la-key"></i>
                    </div>               
                </fieldset>
                
                <fieldset class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }} position-relative has-icon-left">
                    <input id="new-password" type="password" class="form-control" placeholder="New Password" name="new-password" required>
                    <div class="form-control-position">
                        <i class="la la-key"></i>
                    </div>                
                </fieldset>

                <fieldset class="form-group position-relative has-icon-left">
                    <input id="new-password-confirm" type="password" class="form-control" placeholder="Confirm New Password" name="new-password_confirmation" required>
                    <div class="form-control-position">
                        <i class="la la-key"></i>
                    </div>
                </fieldset>
                
                <button type="submit" class="btn btn-outline-success btn-lg btn-block" id="btnchangePassword"><i class="ft-lock"></i> Change Password</button>
            </form>
            </div>
        </div>
        
        </div>
    </div>
</div>

@endsection

@section('my-script')
    <script src="{{ asset('admin/js/form-validation.js') }}"></script>  
@endsection