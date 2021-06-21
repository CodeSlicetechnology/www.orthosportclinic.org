@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')        	
    <div class="main-banner-area-four">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="banner-text">
                                <h1 class="wow fadeInUp font-weight-normal mb-2" data-wow-delay=".4s">{{ $data['homeSectionOne']->main_title }}</h1>
                                <h3 class="wow fadeInUp font-weight-normal mb-2 text-warning" data-wow-delay=".6s">{{ $data['homeSectionOne']->sub_title_1 }}</h3>
                                <p class="wow fadeInUp mt-3 mb-2 text-secondary font-10pt" data-wow-delay=".8s">{{ $data['homeSectionOne']->sub_title_2 }}</p>
                                <div class="banner-btn wow fadeInUp" data-wow-delay=".9s">
                                    <a href="https://docon.co.in/" class="default-btn">
                                        Book An Appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="banner-img-wrap">
                                <div class="shape">
                                    <img src="{{ asset('./'.$data['homeSectionOne']->image_path) }}" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="{{ asset('website/img/home-four/shape-1.png') }}" alt="Image">
        </div>
    </div>

    <section class="emergency-department-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 doctors-detailss">
                    <div class="doctors-history">
                        <div class="row justify-content-center">                            
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="assessments-img pb-3">
                                    <img class="width-100 box-shadow" src="{{ asset('./'.$data['aboutDoctor']->doctorImages[0]->image_path) }}" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center"> 
                            <div class="col-12 text-center">
                                <h4 class="font-weight-normal">{{ $data['aboutDoctor']->doctorName }}</h4>
                                <span class="font-10pt font-weight-normal text-secondary">
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
                        
                        <div class="text-justify">
                            {!! $data['aboutDoctor']->landing_desc !!}
                        </div>
                        
                        <a href="{{ route('about') }}" class="default-btn">
                            Meet Dr. Alva
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-area bg pt-70 pb-70" id="cmProcedures">
        <div class="container">
            <div class="section-title">
                <h2>Common Procedures</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            @foreach ($data['commonProcedures'] as $item)
                                <li class="accordion-item emergency-contents">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        {{ $item->title }}
                                    </a>
                                    <div class="accordion-content text-justify">
                                        {!! $item->description !!}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
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