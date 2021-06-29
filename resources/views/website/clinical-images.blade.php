@extends('website.layouts.master')

@section('my-style')
	<title>Orthopaedic Clinical Images | Orthopaedic Sport Clinic</title>
    <meta name="description" content="Dr.Avinash Alva founded the Orthosport Clinic™ with an aim to provide personalized orthopaedic care for every patient seeking our help. Whether your aim is to achieve normal function or to return to high-level sport, we are committed to delivering the highest possible standard of patient care.">
    <link rel="canonical" href="https://orthosportclinic.org/" />
@endsection


@section('page-content')
    {{-- <div class="page-title-area bg-15">
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
    </div> --}}

    <section class="blog-area ptb-100 top-first-section">
		<div class="container">
			<div class="row">
                @if (count($data['clinicalImages']) > 0)
                    @foreach ($data['clinicalImages'] as $item)
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