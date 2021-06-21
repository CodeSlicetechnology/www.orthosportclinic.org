@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-8 col-8 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0">
                <h4 class="card-subtitle text-center pt-2">
                    <span><strong>Update Banner Content</strong></span>
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

                <form id="bannerSectionForm" method="POST" action="{{ route('update-banner') }}" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <input id="mainTitle" type="text" class="form-control" maxlength="50" value="{{ $homeSectionOne->main_title }}" placeholder="Main Title" name="mainTitle" required>              
                    </div>
                    
                    <div class="form-group">
                        <input id="subTitle1" type="text" class="form-control" maxlength="100" value="{{ $homeSectionOne->sub_title_1 }}" placeholder="Sub Title 1" name="subTitle1" required>              
                    </div>
                    
                    <div class="form-group">
                        <input id="subTitle2" type="text" class="form-control" maxlength="100" value="{{ $homeSectionOne->sub_title_2 }}" placeholder="Sub Title 2" name="subTitle2" required>              
                    </div>
                    
                    <div class="form-group">
                        <p class="mb-1">Change infographic image</p>
                        <input id="imagePath1" type="file" class="form-control" name="imagePath1">              
                    </div>
                    
                    <div class="form-group">
                        <input type="hidden" name="oldImagePath1" value="{{ asset('./'.$homeSectionOne->image_path) }}">
                        <img src="{{ asset('./'.$homeSectionOne->image_path) }}" alt="Image" style="width: 100px;">              
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