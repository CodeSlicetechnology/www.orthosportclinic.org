@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


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
			<div class="row">
                @if (count($data['blogs']) > 0)
                    @foreach ($data['blogs'] as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog">
                                <a href="{{ url('blog-details/'.$item->id) }}">
                                    <img src="{{ asset('./'.$item->image_path) }}" alt="Image">
                                    <div class="blog-content p-3">
                                        <p class="mb-0">{{ substr($item->title,0,25) }}...</p>
                                    </div> 
                                </a>                          
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center ptb-100 mb-5">
                        <p>No blogs found</p>
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