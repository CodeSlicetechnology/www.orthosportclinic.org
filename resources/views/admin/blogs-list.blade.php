@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-8 col-8 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0">
                <h4 class="card-subtitle text-center pt-2">
                    <span><strong>Blogs</strong></span>
                </h4>  
                
                <a href="{{ route('blogs-add') }}" class="btn btn-info">Add New</a>               
            </div> 
            
            <div class="card-content">  
                                   
                    <div class="card-body">
                        <div class="row">
                            @foreach ($blogs as $key => $item) 
                            <div class="col-3 mb-2">
                                <img class="w-100" src="{{ asset('./'.$item->image_path) }}" alt="Image">
                                <p class="mt-2">
                                    {{ $item->title }}  
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                
            </div>
                
        </div>
    </div>
</div>

@endsection

@section('my-script')
    <script src="{{ asset('admin/js/form-validation.js') }}"></script>
@endsection