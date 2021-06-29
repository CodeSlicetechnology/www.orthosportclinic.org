@extends('website.layouts.master')

@section('my-style')
	<title>{{ substr($data['blogs'][0]->title,0,35) }} | Orthopaedic Sport Clinic</title>
    <meta name="description" content="Dr.Avinash Alva founded the Orthosport Clinic™ with an aim to provide personalized orthopaedic care for every patient seeking our help. Whether your aim is to achieve normal function or to return to high-level sport, we are committed to delivering the highest possible standard of patient care.">
    <link rel="canonical" href="https://orthosportclinic.org/" />
    <meta property="og:title" content="{{ $data['blogs'][0]->title }}" />
    <meta property="og:image" content="{{ asset('./'.$data['blogs'][0]->image_path) }}" />
@endsection


@section('page-content')
    {{-- <div class="page-title-area bg-15">
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
    </div> --}}

    <section class="blog-area ptb-100 top-first-section">
		<div class="container">
			<div class="row justify-content-center doctors-detailss">
				<div class="col-10 doctors-history">
                    <div class="blog-details-desc">
                        <div class="article-image text-center pb-4">
                            <img src="{{ asset('./'.$data['blogs'][0]->image_path) }}" alt="image">
                        </div>
                        <div class="article-content">
                            <h2 class="pb-3 font-20pt">{{ $data['blogs'][0]->title }}</h2>
                            {!! $data['blogs'][0]->description !!}
                        </div>
                    </div>
                </div>
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