@extends('website.layouts.master')

@section('my-style')
	<title>Orthopaedic Gallery | Orthopaedic Sport Clinic</title>
    <meta name="description" content="Dr.Avinash Alva founded the Orthosport Clinic™ with an aim to provide personalized orthopaedic care for every patient seeking our help. Whether your aim is to achieve normal function or to return to high-level sport, we are committed to delivering the highest possible standard of patient care.">
    <link rel="canonical" href="https://orthosportclinic.org/" />
@endsection


@section('page-content')

    <section class="blog-area ptb-100 top-first-section">
		<div class="container">
			<div class="row">
                @if (count($data['galleryImages']) > 0)
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
                @else
                    <div class="col-12 text-center ptb-100 mb-5">
                        <p>No images found</p>
                    </div>
                @endif				
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