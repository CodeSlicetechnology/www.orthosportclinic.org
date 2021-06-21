@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')
    {{-- <div class="page-title-area bg-15">
        <div class="container">
            <div class="page-title-content">
            <h2 class="text-dark">Gallery</h2>
                <ul>
                    <li>
                        <a class="text-secondary" href="{{ route('/') }}">
                        Home
                        </a>
                    </li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </div> --}}

    <section class="blog-area pt-100 pb-70 mt-68px">
		<div class="container">
			<div class="row">
				@foreach ($data['galleryImages'] as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <a target="_blank" href="{{ asset('./'.$item->image_path) }}">
                                <img src="{{ asset('./'.$item->image_path) }}" alt="Image">
                            </a>
                            @if ($item->description != null)
                                <div class="blog-content p-3">
                                    <p class="mb-0">{{ $item->description }}</p>
                                </div>
                            @endif                            
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</section>

    @include('website.appointmentSection')
@endsection


@section('my-script')
    <script src="{{ asset('website/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('website/js/contact-form-script.js') }}"></script>
@endsection