@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')
    <div class="page-title-area bg-15">
        <div class="container">
            <div class="page-title-content">
            <h2 class="text-dark">Clinical Images</h2>
                <ul>
                    <li>
                        <a class="text-secondary" href="{{ route('/') }}">
                        Home
                        </a>
                    </li>
                    <li class="active">Clinical Images</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="blog-area pt-100 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/1.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/1.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/2.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/2.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/3.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/3.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/4.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/4.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/5.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/5.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/6.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/6.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/7.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/7.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/8.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/8.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/9.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/9.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/10.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/10.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/11.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/11.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/12.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/12.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/13.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/13.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/14.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/14.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/15.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/15.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/16.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/16.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/17.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/17.jpg') }}" alt="Image">
                        </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog">
						<a target="_blank" href="{{ asset('website/img/clinical-images/18.jpg') }}">
                            <img src="{{ asset('website/img/clinical-images/18.jpg') }}" alt="Image">
                        </a>
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