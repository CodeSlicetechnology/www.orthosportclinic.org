@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')
    {{-- <div class="page-title-area bg-15">
        <div class="container">
            <div class="page-title-content">
            <h2 class="text-dark">Contact Us</h2>
                <ul>
                    <li>
                        <a class="text-secondary" href="{{ route('/') }}">
                        Home
                        </a>
                    </li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div> --}}

    <section class="contact-info-area mt-168px">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-3 p-0">
                    <div class="single-contact-info"> <i class="bx bx-location-plus"></i>
                        <h3>Main Clinic</h3>
                        <p>Bangalore, India</p>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-info"> <i class="bx bx-location-plus"></i>
                        <h3>Outstation Clinics</h3>
                        <p>Mangalore and Coorg</p>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-info"> <i class="bx bxs-paper-plane"></i>
                        <h3>Email</h3>
                        <p>
                            <a href="mailto:clinicorthosport@gmail.com">
                                <span class="text-dark">clinicorthosport@gmail.com</span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 p-0">
                    <div class="single-contact-info"> <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>
                            <a href="tel:+917619633407">
                                <span class="text-dark">(+91) 761 963 3407</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-contact-area contact ptb-100">
        <div class="container">
            <div class="section-title"> <span class="top-title">Contact Us</span>
                <h2>Send us a message for any query</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="contact-wrap contact-pages mb-0">
                        <div class="contact-form">
                            @if(session()->get('success'))
                                <div class="alert alert-success" role="alert">
                                    Well done! {{ session()->get('success') }} 
                                </div>
                            @endif

                            @if(session()->get('error'))
                                <div class="alert alert-danger" role="alert">
                                    Oh snap! {{ session()->get('error') }} 
                                </div>
                            @endif

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    Oh snap! {{ $error }} 
                                </div>
                                @endforeach
                            @endif

                            
                            <form id="contactForm" method="POST" action="{{ route('contact') }}">
                                {!! csrf_field() !!}
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <label>Name</label>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required
                                                data-error="Please enter your name" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label>Email</label>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required
                                                data-error="Please enter your email" placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label>Phone</label>
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" required
                                                data-error="Please enter your number" class="form-control"
                                                placeholder="Your Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <label>Subject</label>
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" value="{{ old('msg_subject') }}" class="form-control"
                                                required data-error="Please enter your subject"
                                                placeholder="Your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Message</label>
                                        <div class="form-group">
                                            <textarea name="message" class="form-control textarea-hight" id="message"
                                                cols="30" rows="5" required data-error="Write your message"
                                                placeholder="Your Message">{{ old('message') }}</textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 text-right">
                                        <button type="submit" class="default-btn btn-two"> Send Message </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>

                            <div class="pt-4">
                                <p class="text-justify">
                                    <span class="font-weight-bold text-info">Interstate/ International Patients:</span>  We offer world class clinical consults to patients from across the globe. For medical tourists, we recommend an initial videoconsult to discuss your clinical and travel requirements. 
                                </p>
                                <p class="text-justify">
                                    <span class="font-weight-bold text-info">Careers:</span> If you possess a background in healthcare and wish to work for Orthosport Clinic, kindly send us a message.  
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    @include('website.appointmentSection')
@endsection


@section('my-script')
    {{-- <script src="{{ asset('website/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('website/js/contact-form-script.js') }}"></script> --}}
@endsection