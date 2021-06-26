@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')

    <section class="blog-area ptb-100 top-first-section">
		<div class="container">
			<div class="row">
				@foreach ($data['galleryImages'] as $item)
                    <div class="col-lg-4 col-md-6 pb-3">
                        <div class="single-blog mobile-width-60 m-auto">
                            <img src="{{ asset('./'.$item->image_path) }}" alt="Image">
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
    <br /><br />
    @include('website.appointmentSection')
@endsection


@section('my-script')
    <script src="{{ asset('website/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('website/js/contact-form-script.js') }}"></script>
@endsection