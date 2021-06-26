@extends('admin.layouts.master')

{{-- @section('my-style')

@endsection --}}

@section('page-content')

<div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-md-12 col-12 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
            <div class="card-header border-0 px-0">
                <h4 class="card-subtitle text-center pt-2">
                    <span><strong>Address List</strong></span>
                </h4>             
                <button class="btn btn-info" id="addNewAddress">Add New</button>           
            </div>         

            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-border">
                            <thead>
                                <tr>
                                    <th>Addrss Title</th>
                                    <th>Address</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($contactAddress) > 0)
                                    @foreach ($contactAddress as $item)
                                    @php
                                        $data = [
                                            "title" => $item->address_title,
                                            "address" => $item->address,
                                        ]
                                    @endphp
                                        <tr>
                                            <td style="white-space: pre-wrap !important; width:30%">{{ $item->address_title }}</td>
                                            <td style="white-space: pre-wrap !important; width:70%">{{ $item->address }}</td>
                                            <td><button type="button" class="btn btn-info" onclick="editAddressModal({{ $item }})">Edit</button></td>
                                            <td><a href="{{ url('delete-address/'.$item->id) }}" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="2" class="text-center">No records found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addNewAddressModal" tabindex="-1" role="dialog" aria-labelledby="addNewAddressModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <form id="bannerSectionForm" method="POST" action="{{ route('manage-address') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input id="addressTitle" type="text" class="form-control" maxlength="30" value="{{ old('addressTitle') }}" placeholder="Address Title" name="addressTitle" required>              
                </div>
                
                <div class="form-group">
                    <textarea id="address" class="form-control" name="address" placeholder="Address" required>{{ old('address') }}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btnbannerSection">Add</button>
            </div>
        </form>
    </div>
  </div>
</div>
<div class="modal fade" id="updateAddressModal" tabindex="-1" role="dialog" aria-labelledby="updateAddressModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <form id="bannerSectionForm" method="POST" action="{{ route('update-address') }}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="addressID" id="addressID" value="">
                <div class="form-group">
                    <input id="addressTitle1" type="text" class="form-control" maxlength="30" value="{{ old('addressTitle1') }}" placeholder="Address Title" name="addressTitle1" required>              
                </div>
                
                <div class="form-group">
                    <textarea id="address1" class="form-control" name="address1" placeholder="Address" required>{{ old('address1') }}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
  </div>
</div>


@endsection

@section('my-script')
    <script src="{{ asset('admin/js/form-validation.js') }}"></script> 
    <script>                
        $("#addNewAddress").on("click", function () {
            $('#addressTitle').val('');
            $('#address').val('');
            $('#addNewAddressModal').modal('show');
        });

        function editAddressModal($data){
            $('#addressID').val($data.id);
            $('#addressTitle1').val($data.address_title);
            $('#address1').val($data.address);
            $('#updateAddressModal').modal('show');
        }
    </script> 
@endsection