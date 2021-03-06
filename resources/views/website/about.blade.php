@extends('website.layouts.master')

@section('my-style')
	<title>About {{ $data['aboutDoctor']->doctorName }} | Sports Surgery & Joint Replacement Clinic</title>
    <meta name="description" content="Dr.Avinash Alva founded the Orthosport Clinic™ with an aim to provide personalized orthopaedic care for every patient seeking our help. Whether your aim is to achieve normal function or to return to high-level sport, we are committed to delivering the highest possible standard of patient care.">
    <link rel="canonical" href="https://orthosportclinic.org/" />
@endsection


@section('page-content')
    {{-- <div class="page-title-area bg-15">
        <div class="container">
            <div class="page-title-content">
            <h2 class="text-dark">About Dr. Alva</h2>
                <ul>
                    <li>
                        <a class="text-secondary" href="{{ route('/') }}">
                        Home
                        </a>
                    </li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </div> --}}

    <section class="emergency-department-area ptb-100 top-first-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 doctors-detailss">
                    <div class="doctors-history mt-0">
                        <div class="row justify-content-center">                            
                            <div class="col-6 col-lg-2">
                                <div class="assessments-img pb-3">
                                    <img class="width-100 box-shadow" src="{{ asset('./'.$data['aboutDoctor']->doctorImages[1]->image_path) }}" alt="Image">
                                </div>
                            </div>
                        </div>
                          
                        <div class="row justify-content-center"> 
                            <div class="col-12 text-center">
                                <h4 class="font-weight-bold font-15px">{{ $data['aboutDoctor']->doctorName }}</h4>
                                <span class="font-10pt font-weight-bold text-secondary">
                                    @foreach ($data['aboutDoctor']->doctorQualification as $key =>$item)
                                        
                                        @if (count($data['aboutDoctor']->doctorQualification)-1 != $key)
                                            {{ $item->qualification }}, &nbsp;
                                        @else
                                            {{ $item->qualification }}
                                        @endif

                                        @if ($item->sequence == 5)
                                            <br />
                                        @endif

                                    @endforeach
                                </span>
                            </div>
                        </div> 
                        
                        <div class="emergency-contents rmv-mb-p h3-blue justify-sub">
                            {!! $data['aboutDoctor']->aboutSectionOne->description !!}
                        </div>
                    </div>

                    <br />

                    <div class="doctors-history">
                        <div class="faq-accordion pt-3">
                            <ul class="accordion">
                                @foreach ($data['aboutDoctor']->aboutSectionTwo as $key => $item)
                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>                                            
                                            <h5 class="text-info font-weight-normal mb-0">
                                                {{ $item->title }}
                                            </h5> 
                                        </a>
                                        <div class="accordion-content rmv-mb-p emergency-contents justify-sub">
                                            {!! $item->description !!}

                                            @if ($key == 1)
                                                <div class="work-wrap owl-carousel owl-theme"> 
                                                    @foreach ($data['aboutDoctor']->researchPublishImages as $item)
                                                        <div class="single-work mb-0">
                                                            <img src="{{ asset('./'.$item->image_path) }}" alt="Image">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('website.associationSection')

    @include('website.appointmentSection')
@endsection


{{-- @section('my-script')

@endsection --}}