@extends('website.layouts.master')

@section('my-style')
	<title>Orthopaedic Sport Clinic | Contact Us</title>
    <meta name="description" content="Dr.Avinash Alva founded the Orthosport Clinic™ with an aim to provide personalized orthopaedic care for every patient seeking our help. Whether your aim is to achieve normal function or to return to high-level sport, we are committed to delivering the highest possible standard of patient care.">
    <link rel="canonical" href="https://orthosportclinic.org/" />
@endsection


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

    <section class="main-contact-area contact ptb-100 top-first-section">
        <div class="container">            
            <div class="contact-wrap contact-pages mb-0">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-lg-5 pb-4">                              
                            <h3 class="text-dark">
                                Contact:
                            </h3>
                            <p class="font-14pt mb-0">                                
                                <a href="mailto:{{ $data['contactDetails']->email }}">
                                    <span class="text-v-center"><i class='bx bx-mail-send'></i></span> <span class="text-dark pl-2">{{ $data['contactDetails']->email }}</span>
                                </a>
                            </p>
                            <p class="font-14pt mb-0">                                
                                <a href="tel:+{{ $data['contactDetails']->country_code }}{{ $data['contactDetails']->phone }}">
                                    <span class="text-v-center"><i class='bx bx-phone-call'></i></span> <span class="text-dark pl-2">(+{{ $data['contactDetails']->country_code }}) {{ $data['contactDetails']->phone }}</span>
                                </a>
                            </p>
                            <p class="font-14pt mb-0">                                
                                <a target="_blank" href="{{ $data['contactDetails']->appointment_link }}">
                                    <span class="text-v-center"><i class='bx bx-calendar-check' ></i></span> <span class="text-dark pl-2">Book An Appointment <span class="pl-2 text-warning font-10pt"><u>Click here</u></span></span>
                                </a>
                            </p>

                            <hr >
                            <p class="font-14pt mt-2">                                
                                <h3 class="text-dark">
                                    Address:
                                </h3>
                                @foreach ($data['contactAddress'] as $item)
                                    <div class="pb-3">
                                        <p class="mb-0 font-weight-bold text-info">{{ $item->address_title }}</p>
                                        <p style="white-space: pre-wrap !important;">{{ $item->address }}</p>
                                    </div>
                                @endforeach
                            </p>
                        </div>
                        <div class="col-lg-7">
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

                                                        
                            <h3 class="text-dark mb-4">
                                Send us a message for any query
                            </h3>
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
                        </div>
                        <div class="col-12 pt-4">
                            <p class="text-justify">
                                <span class="font-weight-bold text-info">Interstate/ International Patients:</span>  We offer world class clinical consults to patients from across the globe. For medical tourists, we recommend an initial videoconsult to discuss your clinical and travel requirements. 
                            </p>
                            <p class="text-justify">
                                <span class="font-weight-bold text-info">Careers:</span> If you possess a background in healthcare and wish to work for Orthosport Clinic<sup>TM</sup>, kindly send us a message.  
                            </p>
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
    {{-- <script src="{{ asset('website/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('website/js/contact-form-script.js') }}"></script> --}}
@endsection