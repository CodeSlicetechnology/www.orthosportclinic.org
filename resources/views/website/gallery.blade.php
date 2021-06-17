@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')
    <div class="page-title-area bg-15">
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
    </div>

    <section class="blog-area pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/gallery/Pic 1.jpg') }}">
                            <img src="{{ asset('website/img/gallery/Pic 1.jpg') }}" alt="Image">
                        </a>
                        <div class="blog-content p-3">
                            <p class="mb-0">Australian orthopaedic association annual meeting, Tasmania 2018</p>
                        </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/gallery/Pic 2.jpg') }}">
                            <img src="{{ asset('website/img/gallery/Pic 2.jpg') }}" alt="Image">
                        </a>
                        <div class="blog-content p-3">
                            <p class="mb-0">World congress of science and medicine in cricket conference, UK 2019 </p>
                        </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/gallery/Pic 3.jpg') }}">
                            <img src="{{ asset('website/img/gallery/Pic 3.jpg') }}" alt="Image">
                        </a>
                        <div class="blog-content p-3">
                            <p class="mb-0">British Orthopaedic Association Annual congress, Birmingham 2007</p>
                        </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/gallery/Pic 4.jpg') }}">
                            <img src="{{ asset('website/img/gallery/Pic 4.jpg') }}" alt="Image">
                        </a>
                        <div class="blog-content p-3">
                            <p class="mb-0">Royal College of surgeons, Edinburgh</p>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="make-appointment-area ptb-100">
        <div class="container">
            <div class="make-appointment-content">
                <h2>Video consultations now open!</h2>
                <a href="javascript::void(0)" class="default-btn">
                    Book An Appointment
                </a>
            </div>
        </div>
    </section>
@endsection


@section('my-script')
    <script src="{{ asset('website/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('website/js/contact-form-script.js') }}"></script>
@endsection