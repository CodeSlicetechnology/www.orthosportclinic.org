@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-8 col-8 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0 px-0">
                <h4 class="card-subtitle text-center pt-2">
                    <span><strong>Update About Dr.Alva - Section One</strong></span>
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

                <form id="bannerSectionForm" method="POST" action="{{ route('about-first-section') }}" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <input id="doctorName" type="text" class="form-control" maxlength="100" value="{{ $aboutDoctor->doctorName }}" placeholder="Main Title" name="doctorName" required>              
                    </div>
                    
                    <div class="form-group">
                        <textarea id="landing_desc" class="form-control" name="landing_desc" required>{{ $aboutDoctor->aboutSectionOne->description }}</textarea>
                    </div>
                    
                    <p class="mb-1">Qualification</p>
                    @foreach ($aboutDoctor->doctorQualification as $key => $item)
                        <div class="form-group">
                            <input id="qualification-{{$key}}" type="text" class="form-control" maxlength="150" value="{{ $item->qualification }}" placeholder="Qualification {{$key}}" name="qualification-{{$key}}" required>              
                        </div>
                    @endforeach
                    
                    <div class="form-group">
                        <p class="mb-1">Change infographic image</p>
                        <input id="imagePath1" type="file" class="form-control" name="imagePath1">              
                    </div>
                    
                    <div class="form-group">
                        <input type="hidden" name="oldImagePath1" value="{{ asset('./'.$aboutDoctor->doctorImages[1]->image_path) }}">
                        <img src="{{ asset('./'.$aboutDoctor->doctorImages[1]->image_path) }}" alt="Image" style="width: 100px;">              
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

    <!-- CKEditor init -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
    <script>
      var route_prefix = "/filemanager";
      CKEDITOR.replace('landing_desc', {
        filebrowserImageBrowseUrl: route_prefix + '?type=Images',
        filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: route_prefix + '?type=Files',
        filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
      });


    </script>
@endsection