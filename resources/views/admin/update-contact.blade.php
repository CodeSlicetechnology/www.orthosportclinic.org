@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-6 col-6 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0 px-0">
                <h4 class="card-subtitle text-center pt-2">
                    <span><strong>Update Contact Details</strong></span>
                </h4>                   
            </div>         

            <div class="card-content">
                <div class="card-body">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        Oh snap! {{ $error }} 
                    </div>
                    @endforeach
                @endif
                @if(session()->get('success'))
                    <div class="alert alert-success" role="alert">
                        Well done! {{ session()->get('success') }} 
                    </div>
                @endif

                <form id="bannerSectionForm" method="POST" action="{{ route('update-contact') }}" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group d-flex">
                        <input id="emailAddress" type="email" class="form-control" maxlength="150" value="{{ $contactDetails->email }}" placeholder="Email Address" name="emailAddress" required>
                        <span class="px-2"></span>
                        <input id="businessTime" type="text" class="form-control" maxlength="20" value="{{ $contactDetails->timings }}" placeholder="Business Time" name="businessTime" required>               
                    </div>
                    
                    <div class="form-group d-flex">
                        <input id="countryCode" type="number" class="form-control w-15" maxlength="2" value="{{ $contactDetails->country_code }}" placeholder="Country Code" name="countryCode" required> 
                        <span class="px-2"></span>             
                        <input id="phoneNumber" type="number" class="form-control" maxlength="10" value="{{ $contactDetails->phone }}" placeholder="Phone Number" name="phoneNumber" required>              
                    </div>
                    
                    <div class="form-group">
                        <input id="appointmentLink" type="url" class="form-control" value="{{ $contactDetails->appointment_link }}" placeholder="Appointment Link" name="appointmentLink" required>              
                    </div>

                    <button type="submit" class="btn btn-success" id="btnbannerSection">Update</button>
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