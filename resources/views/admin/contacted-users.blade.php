@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-12 col-12 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0 px-0">
                <h4 class="card-subtitle text-center pt-2">
                    <span><strong>Contacted Users</strong></span>
                </h4>                   
            </div>         

            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-border">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactForm as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td style="white-space: pre-wrap !important; width:25%">{{ $item->subject }}</td>
                                        <td style="white-space: pre-wrap !important; width:35%">{{ $item->message }}</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
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