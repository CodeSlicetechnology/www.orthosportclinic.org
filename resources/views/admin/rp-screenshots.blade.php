@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-8 col-8 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0 px-0">
                <h4 class="card-subtitle text-center pt-2">
                    <span><strong>Research & Publication Screenshots</strong></span>
                </h4>  
                
                <button class="btn btn-info" data-toggle="modal" data-target="#uploadImageModal">Upload</button>               
            </div> 
            
            <div class="card-content">  
                                   
                    <div class="card-body">
                        <div class="row">
                            @foreach ($researchPublishImages as $key => $item) 
                            <div class="col-2 mb-2">
                                <img class="w-100" src="{{ asset('./'.$item->image_path) }}" alt="Image">
                                <div class="mt-2">
                                    <a class="btn btn-outline-danger float-right" href="{{ url('delete-rp-screenshots/'.$item->id) }}">Delete</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                
            </div>
                
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadImageModal" tabindex="-1" role="dialog" aria-labelledby="uploadImageModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <form id="bannerSectionForm" method="POST" action="{{ route('upload-rp-screenshots') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Upload Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="file" name="imagePath" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btnbannerSection">Upload</button>
            </div>
        </form>
    </div>
  </div>
</div>

@endsection

@section('my-script')
    <script src="{{ asset('admin/js/form-validation.js') }}"></script>
@endsection