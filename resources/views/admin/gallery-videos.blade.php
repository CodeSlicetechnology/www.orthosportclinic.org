@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-8 col-8 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0 px-0">
                <h4 class="card-subtitle text-center pt-2">
                    <span><strong>Gallery Videos</strong></span>
                </h4>  
                
                <button class="btn btn-info" data-toggle="modal" data-target="#uploadVideoModal">Upload</button>               
            </div> 
            
            <div class="card-content">  
                                   
                    <div class="card-body">
                        <div class="row">
                            @if (count($galleryVideos) > 0)
                                @foreach ($galleryVideos as $key => $item) 
                                <div class="col-4 mb-2">
                                    <iframe src="{{ URL($item->video_path) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    
                                    <div class="mt-2">
                                        <a class="btn btn-outline-danger float-right" href="{{ url('delete-gallery-videos/'.$item->id) }}">Delete</a>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <div class="col-12 text-center">
                                    <p class="py-3">No results</p>
                                </div>
                            @endif
                            
                        </div>
                    </div>
                
            </div>
                
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadVideoModal" tabindex="-1" role="dialog" aria-labelledby="uploadVideoModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <form id="bannerSectionForm" method="POST" action="{{ route('upload-gallery-videos') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Upload Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="url" name="videoPath" class="form-control" placeholder="Youtube embed link" required>
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