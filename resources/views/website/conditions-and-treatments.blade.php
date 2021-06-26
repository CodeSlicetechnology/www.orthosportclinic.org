@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')
    {{-- <div class="page-title-area bg-15">
        <div class="container">
            <div class="page-title-content">
            <h2 class="text-dark">Common orthopaedic conditions & treatments</h2>
                <ul>
                    <li>
                        <a class="text-secondary" href="{{ route('/') }}">
                        Home
                        </a>
                    </li>
                    <li class="active">Conditions & Treatments</li>
                </ul>
            </div>
        </div>
    </div> --}}

    <section class="emergency-department-area ptb-100 top-first-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="faq-accordion pt-3">
                        <ul class="accordion">
                            @foreach ($data['conditionsAndTreatments'] as $item)
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        <h5 class="text-info font-weight-normal mb-2">
                                            {{ $item->title }}
                                        </h5> 
                                    </a>
                                    <div class="accordion-content rmv-mb-p emergency-contents justify-sub">
                                        {!! $item->description !!}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>   
                    <p class="font-12pt mt-4 text-lg-right text-sm-center font-weight-bold font-italic">
                        (This information is only a guideline; kindly consult a specialist)
                    </p>         
                </div>
            </div>
        </div>
    </section>

    <br /><br />

    @include('website.appointmentSection')
@endsection


{{-- @section('my-script')

@endsection --}}