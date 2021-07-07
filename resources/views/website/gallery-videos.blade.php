@extends('website.layouts.master')

@section('my-style')
	<title>Orthopaedic Gallery | Sports Surgery & Joint Replacement Clinic</title>
    <meta name="description" content="Dr.Avinash Alva founded the Orthosport Clinic™ with an aim to provide personalized orthopaedic care for every patient seeking our help. Whether your aim is to achieve normal function or to return to high-level sport, we are committed to delivering the highest possible standard of patient care.">
    <link rel="canonical" href="https://orthosportclinic.org/" />
@endsection


@section('page-content')

    <section class="blog-area ptb-100 top-first-section">
		<div class="container">
			<div class="row">
                @if (count($data['galleryVideos']) > 0)
                    @foreach ($data['galleryVideos'] as $item)
                        <div class="col-lg-4 col-md-6 pb-3">
                            <iframe src="{{ URL($item->video_path) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center ptb-100 mb-5">
                        <p>No videos found</p>
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