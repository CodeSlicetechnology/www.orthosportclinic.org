@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')

    <section class="blog-area pb-70 pt-100 top-first-section">
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