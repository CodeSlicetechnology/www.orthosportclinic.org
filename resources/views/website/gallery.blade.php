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
						<a target="_blank" href="{{ asset('website/img/gallery/alva.jpg') }}">
                            <img src="{{ asset('website/img/gallery/alva.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="make-appointment-area ptb-100">
        <div class="container">
            <div class="make-appointment-content">
                <h2>Online appointments are now open!</h2>
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