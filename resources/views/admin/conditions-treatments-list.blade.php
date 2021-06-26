@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-8 col-8 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0 px-0">
                <h4 class="card-subtitle text-center pt-2">
                    <span><strong>Update Conditions and Treatments</strong></span>
                </h4>                   
            </div>     
            
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
            
            <div class="card-content">
                @foreach ($conditionsAndTreatments as $key => $item)                    
                    <div class="card-body">
                        {{ $item->title }} <a class="btn btn-info float-right" href="{{ url('conditions-treatments-list/'.$item->id) }}">Edit</a>
                        <hr>
                    </div>
                @endforeach
            </div>
                
        </div>
    </div>
</div>

@endsection
{{-- 
@section('my-script')

@endsection --}}