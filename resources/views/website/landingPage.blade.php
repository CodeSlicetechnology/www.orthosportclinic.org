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
                                <h1 class="wow fadeInUp" data-wow-delay=".4s">Patient safety is our top priority.</h1>
                                <h3 class="wow fadeInUp mb-4 text-secondary font-weight-normal" data-wow-delay=".6s">Online appointments are now open!</h3>
                                <div class="banner-btn wow fadeInUp" data-wow-delay=".9s">
                                    <a href="https://docon.co.in/" class="default-btn">
                                        Book An Appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 pr-0">
                            <div class="banner-img-wrap">
                                <div class="shape">
                                    <img src="{{ asset('website/img/home-four/shape-2.png') }}" alt="Image">
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
                        <div class="row pb-2">                            
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="assessments-img pb-3">
                                    <img class="width-100 border-3px box-shadow" src="{{ asset('website/img/avinash-dark.jpg') }}" alt="Image">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-10 col-lg-10">
                                <h2>Dr. Avinash Alva</h2>
                                <span class="font-12pt font-weight-normal text-info">
                                    FRCSEd (Trauma & Orth), MS (Ortho), Pg Cert (Orth Research, UK), <br />
                                    MRCSEd (Sur), MBBS (Manipal Uni) Fellowship trained in Knee, <br />
                                    Anterior Hip & Shoulder Surgery
                                </span>
                            </div>
                        </div>                        
                        
                        <p>
                            Dr.Alva founded the Orthosport ClinicTM with an aim to provide personalized orthopaedic care for every patient seeking our help. Whether your aim is to achieve normal function or to return to high-level sport, Orthosport ClinicTM is committed to delivering the highest possible standard of patient care. 
                        </p>

                        <p>
                            Orthopaedic surgeon Dr. Avinash Alva specializes in arthroscopic surgery, sports medicine and minimally invasive joint replacement procedures. He is an experienced surgeon-researcher with a keen interest in tissue sparing surgical techniques in treatment of joint disease. Dr. Alva spent 10 years in the UK and 3 years in Australia accruing international training and exposure in orthopedic surgery. He undertook subspecialist fellowships at London (Complex knee & Elite athlete surgery), Melbourne (Anterior Hip & Knee) and Canberra (Shoulder Surgery). 
                        </p>

                        <p>
                            Dr. Alva has dedicated significant time to research joint preservation and replacement techniques that have enhanced patient care standards.
                        </p>
                        
                        <a href="{{ route('about') }}" class="default-btn">
                            Meet Dr. Alva
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-area bg pb-70" id="cmProcedures">
        <div class="container">
            <div class="section-title">
                <h2>Common Procedures</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Primary and Revision ACL reconstruction
                                </a>
                                <div class="accordion-content show">
                                    <p>
                                        Rupture of the anterior cruciate ligament (ACL) can lead to instability of the knee. When instability occurs, there is a risk of damage to meniscus and premature arthritis of the knee joint. The main reason for reconstructing the ACL is to stop instability and further damage to knee cartilage. 30-40% of all ACL injuries are associated with injuries to the meniscus, other ligaments or poor biology. ACL reconstruction is a planned elective procedure. Before the surgery it is important to ice the knee and gain full extension. Surgery is performed under an anaesthetic. The surgery involves taking a tendon graft (hamstring/patellar tendon/quadriceps/allograft). The graft is placed and fixed in bone tunnels in the femur and tibia. Depending on the associated injuries you may be given a brace. Most patients go home within 24 hours. You can return to a desk job in 2 weeks. 
                                    </p>

                                    <p>
                                        <u>Revision ACL reconstruction</u> - ACL reconstruction failure usually occurs due to poor biology or poor surgery. In case pain or knee instability persists following an ACL reconstruction, a clinical and radiological evaluation helps in planning corrective treatment.
                                    </p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Bikini Hip Replacement
                                </a>
                                <div class="accordion-content">
                                    <p>
                                        The bikini hip replacement is a truly minimally invasive technique to perform hip replacements. This technique was developed in Switzerland and has been performed successfully for decades. It is a tissue sparing variation of the direct anterior approach to the hip. The technique involves a small incision on the front of the hip along the groin crease allowing access to the hip joint between two muscles in front of the hip. Blood vessels and muscles around the hip joint are left intact during the procedure. As no muscles are detached, this procedure offers markedly quicker recovery, shorter hospital stay, less pain and lowers risk of dislocation. Unlike other approaches, there is no requirement for postoperative restrictions.
                                    </p>

                                    <div class="emergency-contents py-3">
                                        <h6 class="font-weight-normal">
                                            Several peer-reviewed publications over the last two decades have proposed the following advantages of the bikini technique and direct anterior approach:
                                        </h6>

                                        <ul class="mb-0">
                                            <li>Small hidden incision</li>
                                            <li>Posterior hip stabilizer muscles and tissues are left intact</li>
                                            <li>Blood vessels to hip muscles and femur are protected</li>
                                            <li>Reduced risk of dislocation</li>
                                            <li>Rapid return to function</li>
                                            <li>No postoperative restrictions (use regular chairs, freely cross legs, sleeping on the side, discard crutches as early as 3-4 days)</li>
                                            <li>Avoids need for strong painkillers and their side effects</li>
                                            <li>Allows excellent view of the acetabulum and measurement of leg lengths in supine position during surgery</li>
                                        </ul>
                                    </div>

                                    <p>
                                        Due to the learning curve it is recommended that surgeons perform this procedure after dedicated training in anterior hip surgery. Dr. Alva underwent accredited fellowships and worked for 2 years on bikini hip replacements at Australia’s busiest centre for anterior hip surgery. He co-authored research papers on cemented bikini hip replacements, its advantages in obese patients and surgical techniques to minimize complications.
                                    </p>                                
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Knee Replacement
                                </a>
                                <div class="accordion-content">
                                    <p>
                                        Knee replacements are performed for painful degenerative conditions of the knee. Partial knee replacements (unicondylar knee replacement or patellofemoral knee replacements) are performed if the arthritis is restricted to one compartment of the knee. Total knee replacements are performed if more than one compartment of the knee is involved. Tourniquet is generally not preferred, to reduce pain and enable quick rehabilitation. Appropriate surgical technique, special instrumentation or PSI enables minimally invasive surgery. During preplanned steps of the surgery, a mix of local anaesthetic injection is delivered around the knee. Tissue preservation and enhanced recovery programme reduces pain and enables the patient to walk within few hours of surgery. Dr. Alva was closely involved with development of local anaesthetic infiltration protocol at Royal National Orthopaedic Hospital, London. After the surgery patients can sleep in any position, walk within hours and studies confirm that up to 70% of patients are able to drive within 2-3 weeks.
                                    </p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    Arthroscopy and Revision Arthroscopy
                                </a>
                                <div class="accordion-content">
                                    <p>
                                        Arthroscopy literally means to look within the joint. They are commonly performed for knee and shoulder joints. Less frequently they are used for the hip, ankle, elbow and wrist joint. A small camera is inserted into the joint and images are relayed to the television screen. Specialized instruments are introduced into the joint through a small incision. Using these instruments, procedures like meniscal repair, ACL reconstruction, rotator cuff repair, labrum repair, carpal tunnel decompression, excision of CAM lesions in the hip, loose body removal, excision of bursitis etc are performed. A single suture is generally used to close the incisions. Most often patients go home on the same evening or after an overnight stay. Advantages of arthroscopic surgery include excellent visibility of tissues, early recovery, less pain and shorter stay in hospital.                                        
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="make-appointment-area ptb-100">
        <div class="container">
            <div class="make-appointment-content">
                <h2>Online appointments are now open!</h2>
                <a href="javascript::void(0)" class="default-btn">
                    Book An Appointment
                </a>
            </div>
        </div>
    </section>
@endsection


{{-- @section('my-script')

@endsection --}}