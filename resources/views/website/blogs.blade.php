@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')
    <div class="page-title-area bg-15">
        <div class="container">
            <div class="page-title-content">
            <h2 class="text-dark">Blogs</h2>
                <ul>
                    <li>
                        <a class="text-secondary" href="{{ route('/') }}">
                        Home
                        </a>
                    </li>
                    <li class="active">Blogs</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="blog-area pt-100 pb-100">
		<div class="container">
			<p class="text-center">No blogs found</p>
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