@extends('website.layouts.master')

{{-- @section('my-style')

@endsection --}}


@section('page-content')
    <div class="page-title-area bg-15">
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
    </div>

    <section class="emergency-department-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 doctors-detailss">
                    <div class="doctors-history">
                        <div class="row pb-2">                            
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="assessments-img pb-3">
                                    <img class="width-100 box-shadow" src="{{ asset('website/img/avinash-dark.jpg') }}" alt="Image">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-10 col-lg-10">
                                <h4 class="font-weight-normal mb-0">Dr. Avinash Alva</h4>
                                <p class="font-10pt mb-2 text-dark">(Professional Journey & International Profile)</p>
                                <span class="font-10pt font-weight-normal text-secondary">
                                    FRCSEd (Trauma & Orth), MS (Ortho), Pg Cert (Orth Research, UK), MRCSEd (Sur), MBBS (Manipal Uni) <br /> 
                                    Fellowship trained in Knee, Anterior Hip & Shoulder Surgery
                                </span>
                            </div>
                        </div>                        
                        
                        <p class="text-justify">
                            Dr. Avinash Alva studied medicine at Kasturba Medical College, Mangalore and completed M.S (Ortho) from Rajiv Gandhi University, Bangalore. He undertook basic surgical training in Yorkshire, research fellowship at Wrightington Hospital and registrar training in Northwest London. He passed Membership exams of Royal College of surgeons in 2006 and graduated as Fellow of the Royal College of Surgeons (Edinburgh) in Orthopaedic Surgery. 
                        </p>
                        
                        <div class="emergency-contents pt-4">
                            <h5 class="text-warning font-weight-normal mb-3"><u>Post-FRCS Subspecialist Fellowships</u></h5>

                            <h6>Chelsea-Fortius Complex Knee Fellowship</h6>
                            <p class="text-justify">
                                In 2017 Dr. Alva was appointed as Complex Knee fellow to work at London’s Chelsea & Westminster Hospital and Fortius Clinic. He was fellow to Dr. Andy Williams for 9 months. Patient load included referrals from majority of English premier league football clubs, rugby clubs, Olympic athletes and International cricketers. The surgical training involved management of complex knee problems, surgery in elite athletes and robotic joint replacements.
                            </p>
                            
                            <h6>Accredited Fellowships in Australia</h6>
                            <p class="text-justify">
                                At Melbourne, Dr Alva worked for 2 years at Australia’s busiest centre for anterior hip surgery. Cases included bikini hip replacements, PSI knee replacements, hip arthroscopy, sports surgery and enhanced recovery techniques. At Canberra, he undertook a 6-month shoulder fellowship that focused on arthroscopic and open surgery of the shoulder joint.
                            </p>
                        </div>
                        
                        
                        <div class="emergency-contents pt-4">
                            <h5 class="text-warning font-weight-normal mb-3"><u>Team Medical Cover & Sports</u></h5>

                            <p class="text-justify">
                                Dr.Alva has provided team medical cover for sports events and cricket matches involving the Indian cricket team (BCCI). He has played a variety of sports and has represented the following cricket teams - Manipal University, Karnataka state junior reserves and Newburgh club in Lancashire. 
                            </p>
                        </div>
                        
                        
                        <div class="emergency-contents pt-4">
                            <h5 class="text-warning font-weight-normal mb-3"><u>Professional Associations</u></h5>

                            <ul class="mb-0">
                                <li>Royal College of Surgeons, UK</li>
                                <li>ESSKA, Europe</li>
                                <li>APHRA, Aus</li>
                                <li>General Medical Council, UK</li>
                                <li>Karnataka Medical Council, India</li>
                                <li>FAGE, Manipal</li>
                            </ul>
                        </div>
                    </div>

                    <br />

                    <div class="doctors-history">
                        <div class="faq-accordion pt-3">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Academic Qualifications 
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-2">
                                            <p class="text-warning mb-0 font-weight-bold">FRCSEd (Trauma and Orthopaedics): </p>
                                            <p class="text-justify">
                                                Royal College of Surgeons, Edinburgh, UK
                                            </p>
                                        </div>

                                        <div class="pb-2">
                                            <p class="text-warning mb-0 font-weight-bold">MS (Ortho): </p>
                                            <p class="text-justify">
                                                Rajiv Gandhi University of Health Sciences, India
                                            </p>
                                        </div>

                                        <div class="pb-2">
                                            <p class="text-warning mb-0 font-weight-bold">Post Graduate Certificate (Orthopaedic Research): </p>
                                            <p class="text-justify">
                                                Edgehill University, UK
                                            </p>
                                        </div>

                                        <div class="pb-2">
                                            <p class="text-warning mb-0 font-weight-bold">MRCSEd: </p>
                                            <p class="text-justify">
                                                Royal College of Surgeons, Edinburgh, UK
                                            </p>
                                        </div>

                                        <div class="pb-2">
                                            <p class="text-warning mb-0 font-weight-bold">MBBS: </p>
                                            <p class="text-justify">
                                                Kasturba Medical College, Mangalore
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        International Appointments
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-2 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">Melbourne Anterior Hip, Knee and Sports Surgery Fellowship <i>(AOA Accredited)</i> </p>
                                            <ul class="mb-4">
                                                <li>Epworth Hospital</li>
                                                <li>Cabrini Hospital</li>
                                            </ul>
                                        </div>

                                        <div class="pb-2 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">Canberra Shoulder and Sports Surgery Fellowship, Aus <i>(AOA Accredited)</i> </p>
                                            <ul class="mb-4">
                                                <li>National Capital Private Hospital</li>
                                                <li>Canberra Private Hospital</li>
                                            </ul>
                                        </div>

                                        <div class="pb-2 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">Chelsea-Fortius Complex Knee Fellowship, London <i>(Elite athlete surgery/Robotics)</i> </p>
                                            <ul class="mb-4">
                                                <li>Chelsea and Westminster Hospital </li>
                                                <li>Fortius Clinic (FIFA centre of excellence)</li>
                                            </ul>
                                        </div>

                                        <div class="pb-2 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">Specialist Registrar, Trauma & Orthopaedics <i>(Knee, Hip, Shoulder, Spine, Paediatric Orthopaedics, Trauma, Hands)</i> </p>
                                            <ul class="mb-4">
                                                <li>Royal National Orthopaedic Hospital, Stanmore, London</li>
                                                <li>North West London Hospitals NHS Trust, London</li>
                                                <li>St Mary’s Hospital, Paddington, London</li>
                                            </ul>
                                        </div>

                                        <div class="pb-2 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">Clinical Research Fellowship <i>(Knee, Hip, Upper limb)</i> </p>
                                            <ul class="mb-4">
                                                <li>Wrightington Hospital, UK</li>
                                            </ul>
                                        </div>

                                        <div class="pb-2 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">Basic Surgical training <i>(Orthopaedics, Plastic Surgery, Colorectal surgery)</i> </p>
                                            <ul class="mb-4">
                                                <li>St. James’s University Hospital, Leeds</li>
                                                <li>Leeds General Infirmary, Leeds</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Academics, Research and Publications 
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-4 emergency-contents">
                                            <p class="mb-0 font-weight-bold">
                                                -> Dr Alva completed a two year Postgraduate Certificate program in Orthopaedic research at Wrightington hospital. 
                                            </p>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="mb-0 font-weight-bold">
                                                -> Faculty at the Royal National Orthopedic Hospital FRCS orthopedics course since 2016 for candidates sitting the British exit exam.  
                                            </p>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="mb-0 font-weight-bold">
                                                -> Invited reviewer for Bone and Joint Journal, British edition that involves assessment of research papers for publication.  
                                            </p>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="mb-0 font-weight-bold">
                                                -> Over 10 years experience of combining patient care and research 
                                            </p>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="mb-0 font-weight-bold">
                                                -> Involved in clinical teaching for medical students and residents since 2013 
                                            </p>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="mb-0 font-weight-bold">
                                                -> Presentations and publications in reputed peer reviewed research journals on topics including
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>Surgery in elite athletes</li>
                                                <li>Minimally invasive joint replacements</li>
                                                <li>Revision ACL reconstruction</li>
                                                <li>Bikini hip replacements</li>
                                                <li>Biomechanics of the patellofemoral joint</li>
                                                <li>Rotator cuff tears and superior capsular reconstruction</li>
                                                <li>Patient safety pathways</li>
                                                <li>Techniques of knee osteotomy</li>
                                                <li>Bone grafting in revision hip replacement</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="work-wrap owl-carousel owl-theme">                                            
                                            <div class="single-work">
                                                <a target="_blank" href="{{ asset('website/img/screenshots/1.jpg') }}" title="Click to open">
                                                    <img src="{{ asset('website/img/screenshots/1.jpg') }}" alt="Image">
                                                </a>
                                            </div>
                                            
                                            <div class="single-work">
                                                <a target="_blank" href="{{ asset('website/img/screenshots/2.jpg') }}" title="Click to open">
                                                    <img src="{{ asset('website/img/screenshots/2.jpg') }}" alt="Image">
                                                </a>
                                            </div>
                                            
                                            <div class="single-work">
                                                <a target="_blank" href="{{ asset('website/img/screenshots/3.jpg') }}" title="Click to open">
                                                    <img src="{{ asset('website/img/screenshots/3.jpg') }}" alt="Image">
                                                </a>
                                            </div>
                                            
                                            <div class="single-work">
                                                <a target="_blank" href="{{ asset('website/img/screenshots/4.jpg') }}" title="Click to open">
                                                    <img src="{{ asset('website/img/screenshots/4.jpg') }}" alt="Image">
                                                </a>
                                            </div>
                                            
                                            <div class="single-work">
                                                <a target="_blank" href="{{ asset('website/img/screenshots/5.jpg') }}" title="Click to open">
                                                    <img src="{{ asset('website/img/screenshots/5.jpg') }}" alt="Image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Randomized Controlled Trials
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-2">
                                            <p class="text-justify">
                                                Dr Alva was involved in the RCT studying “Stem Cell treatment for osteochondral defects in the knee” in the Joint reconstruction Unit at Royal National Orthopaedic Hospital, London.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Select Publications in International peer reviewed journals
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-2 emergency-contents">
                                            <ul class="mb-0 ml-4">
                                                <li>”Radiographic evaluation of femoral cement mantle in bikini incision anterior total hip arthroplasty on a standard table.” Alva A, Gogos S, Nizam I; Sicot J; Jan 2021</li>
                                                <li>“Minimizing Complications in Direct Anterior Approach for Total hip arthroplasty: A single surgeon series of 865 cases.” Alva A, Nizam I, Gogos S; Journal of Experimental Orthopedics; Dec 2020</li>
                                                <li>“Fast bowlers Knee- Anteromedial articular impingement” Reid M, Alva A, Jones M, Reid MJ, Jones MH, Williams A; Journal of Experimental Orthopedics; Issue 7 Feb 2020</li>
                                                <li>“Pneumatic femoral broaching in direct anterior approach hip arthroplasty” Batra AV, Nizam I, Alva A; BMJ Innovations; Jan 2021</li>
                                                <li>”A cadaveric model to evaluate the effect of unloading the medial quadriceps on patellar tracking and patellofemoral joint pressure and stability.” Stephens J, Alva A, Williams A, Amis A; Journal of Experimental Orthopedics; Sep 2018</li>
                                                <li>“Are albumin and total lymphocyte count significant and reliable predictors of mortality in fractured neck of femur patients” Kumar V, Alva A, Akenna S, Clough T; European Journal of Orthopaedic Surgery and Traumatology; Aug 2013</li>
                                                <li>“Autologous Tendon grafts used in Upper limb Surgery” (Review article) Alva A.M, Ng CY, Talwalkar SC; Scientific Research (OJO), Vol 3, Num 2, June 2013</li>
                                                <li>“Necrotizing Fasciitis: A series of seven cases”, Alva A.M, Shah N, Talwalkar SC; Acta Orthopedica Belgica, 79(1), Feb 2013, 104-106  </li>
                                                <li>”Block Vertebra” Alva A, Bhagawati D, Noordeen H; BMJ Case Reports, Dec 2017</li>
                                                <li>“Old Unreduced Traumatic anterior dislocation of the Hip” Alva AM, Shetty M, Kumar V; BMJ Case Reports April 2013</li>
                                                <li>"Group B Streptococci as an unusual cause of septic arthritis of the hip: Association with childbirth"; Kumar V, Alva A.M, Board T; BMJ Case Reports April 2013</li>
                                                <li>“Intraoperative assessment of flexor hallucis longus tendon integrity following hallux valgus correction” Vanhegan I, Alva A, Baghla D; Annals of the royal college of surgeons, May 2016</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Published Book Chapters
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-2">
                                            <p class="text-justify">
                                                “Bone and Joint Care Paths” Simon Grange, Alva A et al Incisive Publishing Dec 2014.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Current Research 
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-2">
                                            <p class="text-justify">
                                                Bikini Anterior Hip Replacements in Obese Patients Pose Minimal Complications. Nizam I, Alva A, Dabirrehmani D 
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        International Presentations
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “Radiographic evaluation of femoral cementation in bikini incision anterior total hip arthroplasty on a standard operating table” Alva A, Gogos S, Nizam I
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>AOA ASM, Tasmania, Australia, August 2019</li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “Arthroscopic superior capsular reconstruction – Early results” Alva A, Damiani M
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>AOA ASM, Canberra, Australia, November 2019</li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “Single stage ACL revision: an algorithm for treatment and experience of 106 cases including 34 elite athletes.” White N, Alva A, Williams A
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>British Association of Knee Surgeons Congress March 2018</li>
                                                <li>ISAKOS October 2018</li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “Non traumatic dislocation of a mobile bearing polyethylene in a medial Unicompartmental knee replacement causing severe metal debris” Apostolopolous A, Alva A, Saavedra E.
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>EFORT Congress, Prague, May 2015</li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “Surgical Options in management of failed trapeziectomies: A series of 4 cases” Alva A.M, Ng CY, Talwalkar SC, Hayton M. 
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>BOA World Congress, Birmingham, June 2013</li>
                                                <li>British Society of Surgery of the Hand, London meeting May 3rd, 4th 2012 (Poster)</li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                ”Lateral Opening versus Medial Closing Wedge Distal Femoral Varus Osteotomy - Is there a difference in achieving desired realignment?” Alva A, Coupe BD, Rae PJ
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>BOA World Congress, Birmingham, June 2013</li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “Effect of the overall Injury Severity upon Union and Complication rates of Open IIIa – IIIb Tibial Fractures” Alva AM, Kanakaris N, PV Giannoudis
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>BOA World Congress, Manchester, September 2007</li>
                                                <li>OTA World Congress, Boston, USA, October 2007 (poster)</li>
                                                <li>Efort World Congress, Nice, France, July 2008 (poster)</li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “Necrotizing Fasciitis: A series of seven cases.” Alva A.M, Shah N, Talwalkar ST
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>British Trauma Society, 2011 Meeting, Manchester, UK, May 5th, 6th 2011 (poster)</li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “Shortened antibiotic prophylaxis regime in pelvi-acetabular surgery.” Lee NY, Alva A.M, Shah.N, Clayson A
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>British Trauma Society, Manchester, UK, May 5th, 6th 2011 </li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “Structural bone grafting in Acetabular revision surgery – Medium term results” Alva A, Hemmady MV, Hodgkinson JP 
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>British Hip Society, Bristol, 2013</li>
                                            </ul>
                                        </div>

                                        <div class="pb-4 emergency-contents">
                                            <p class="text-warning mb-0 font-weight-bold">
                                                “The time delay between prescription and administration of the first dose of iv antibiotics in sepsis” presented at the
                                            </p>
                                            <ul class="mb-0 ml-4">
                                                <li>Excellence Conference, Hammersmith Hospital, June 2nd 2015</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Published Conference Abstracts
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-2 emergency-contents">
                                            <ul class="mb-0 ml-4">
                                                <li>“Shortened antibiotic prophylaxis regime in pelvi-acetabular surgery—Results from an audit”, N. Lee, A.M. Alva, A. Clayson, N. Shah; Injury Extra, Volume 42, Issue 9, September 2011, 162</li>
                                                <li>Necrotizing fasciitis: Series of seven cases”, A.M. Alva, N. Shah, S.C. Talwalkar; Injury Extra, Volume 42, Issue 9, September 2011, 156-157</li>
                                                <li>“Effect of the overall Injury Severity upon Union and Complication rates of Open IIIa – IIIb Tibial Fractures” Alva AM, PV Giannoudi; (Orthopaedics and Trauma Association (OTA) 2007 handbook) (BOA 2007) J Bone Joint Surg Br 2012 vol. 94-B no. SUPP IV 92)</li>
                                                <li>“Structural bone grafting in Acetabular revision surgery – Medium term results” Alva A, Hemmady MV, Hodgkinson JP British Hip Society, Bristol, 2013; The bone and Joint Journal proceedings.</li>
                                                <li>“Intraoperative reduction of Distal Tibiofibular joint: Are we doing enough?” Alva A.M, Lee NY, Karski MT   EFORT Istambul 2013, The bone and Joint Journal proceedings.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Quality Improvement Projects
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-2 emergency-contents">
                                            <ul class="mb-0 ml-4">
                                                <li>Standardizing intraoperative periarticular injections for arthroplasty cases at Royal National Orthopaedic Hospital. New local infiltration anaesthetic protocol successfully introduced for arthroplasty patients.</li>
                                                <li>“The time delay between prescription and administration of the first dose of iv antibiotics” Ealing Hospital.</li>
                                                <li>”Audit of ankle syndesmosis fixation” Presented in Wrightington Hospital.</li>
                                                <li>”Audit of shortened antibiotic regimen in pelvi-acetabular surgery” Wrightington Hospital.</li>
                                                <li>“Audit of Necrotizing Fasciitis” Wrightington Hospital 2010. </li>
                                                <li>“Resurfacing Arthroplasty of Hips” at Pinderfields General Hospital. </li>
                                                <li>“MRSA Prophylaxis in Elective Orthopaedic patients” at Pinderfields General Hospital. </li>
                                                <li>“Audit of Colorectal Cancers” at Pontefract General Infirmary, Yorkshire. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Professional Development
                                    </a>
                                    <div class="accordion-content">
                                        <div class="pb-2 emergency-contents">
                                            <ul class="mb-0 ml-4">
                                                <li>Exchange Fellowship Award – Dutch Arthroscopy Association, 2018</li>
                                                <li>Surgical Visitation – Sports knee surgery, Epworth Hospital, Australia</li>
                                                <li>Surgical Visitation – Hip Arthroscopy, CPH, Canberra Australia</li>
                                                <li>Cadaveric Knee Multiligament Injury Course, Melbourne </li>
                                                <li>Cadaveric shoulder Arthroplasty Course, Sydney </li>
                                                <li>Shoulder masters course, Sydney </li>
                                                <li>Hip Arthroscopy Course (Esska) Watford </li>
                                                <li>Management and Leadership Course (Keele Uni) London</li>
                                                <li>Advanced soft tissue knee course (ESSKA) Watford</li>
                                                <li>Soft tissue knee course (S&N) Watford</li>
                                                <li>Training the trainer (RCS) London</li>
                                                <li>AO Trauma course –Pelvis Bristol</li>
                                                <li>Spinal Surgery Course for FRCS Orthopaedics Cardiff</li>
                                                <li>Foot and Ankle Course, Wexham Park London</li>
                                                <li>Basic Sciences FRCS Revision Course London</li>
                                                <li>Trauma Symposium RSM, London</li>
                                                <li>ALERT Course Aintree Hospital</li>
                                                <li>AO Trauma Course AO, Leeds, UK </li>
                                                <li>Advanced Communication Skills Course Leighton Hospital, Crewe</li>
                                                <li>Advanced Fracture Fixation Course for senior Residents, Florida</li>
                                                <li>Advanced Life Support update Wrightington Hospital</li>
                                                <li>Watanabe Practical Shoulder Arthroscopy Course S&N, York</li>
                                                <li>Knee Arthroscopy Course S&N, Oxford</li>
                                                <li>Effective Teaching Skills Mersey Deanery</li>
                                                <li>Practical Plastic Surgery Workshop Wrightington Hospital</li>
                                                <li>Leadership and MBTI course Mersey Deanery</li>
                                                <li>Knee Arthroplasty Course RNOH, Stanmore</li>
                                                <li>Advanced Trauma Life Support (ATLS) Leeds</li>
                                                <li>Practical Skills Course (Knee) ICRS, Kings Hosp, London</li>
                                                <li>Hoffman’s External Fixation Course Wrightington Hospital</li>
                                                <li>Scientific Basis of Surgical Practice Course RCS, Leeds</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="emergency-department-area pb-70">
        <div class="container">
            <div class="work-wrap owl-carousel owl-theme">
                
                <div class="single-work">
                    <img src="{{ asset('website/img/associations/1.jpg') }}" alt="Image">
                </div>
                
                <div class="single-work">
                    <img src="{{ asset('website/img/associations/2.jpg') }}" alt="Image">
                </div>
                
                <div class="single-work">
                    <img src="{{ asset('website/img/associations/3.jpg') }}" alt="Image">
                </div>
                
                <div class="single-work">
                    <img src="{{ asset('website/img/associations/4.jpg') }}" alt="Image">
                </div>
                
                <div class="single-work">
                    <img src="{{ asset('website/img/associations/5.jpg') }}" alt="Image">
                </div>
                
                <div class="single-work">
                    <img src="{{ asset('website/img/associations/6.jpg') }}" alt="Image">
                </div>

            </div>
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


{{-- @section('my-script')

@endsection --}}