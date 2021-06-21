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

    <section class="emergency-department-area pt-100 top-first-section">
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
                                    <div class="accordion-content rmv-mb-p emergency-contents">
                                        {!! $item->description !!}
                                    </div>
                                </li>
                            @endforeach
                            {{-- <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    <h5 class="text-info font-weight-normal mb-2">
                                        Arthritis
                                    </h5> 
                                </a>
                                <div class="accordion-content">
                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is arthritis?
                                        </p>
                                        <p class="text-justify">
                                            Arthritis means inflammation of joint. Various common types of arthritis include osteoarthritis, inflammatory arthritis (rheumatoid, seronegative) and secondary arthritis (post traumatic, post AVN). Arthritis is a chronic condition, which cannot be reversed.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is rheumatoid arthritis or inflammatory arthritis?
                                        </p>
                                        <p class="text-justify">
                                            It is a chronic autoimmune disease seen in 1% of the population. Symptoms include pain, swelling and deformity. Treatment includes a combination of medications, brace, injections and fusion/joint replacement surgery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            Can arthritis be managed without surgery?
                                        </p>
                                        <p class="text-justify">
                                            Yes. Multiple non-surgical treatment options are available to manage arthritis. These include activity modification, medications, injections, orthotics and physiotherapy. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            Does PRP or Stem cells cure arthritis?
                                        </p>
                                        <p class="text-justify">
                                            No. Currently there is no scientific evidence to show that PRP injections can reverse or stop the progression of arthritis. 
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    <h5 class="text-info font-weight-normal mb-2">
                                        Knee Injuries – Cartilage, Meniscus, Ligaments and Kneecap
                                    </h5> 
                                </a>
                                <div class="accordion-content">
                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What happens during common knee injuries?
                                        </p>
                                        <p class="text-justify">
                                            Common knee injuries may damage structures inside the joint including the meniscus, anterior cruciate ligament and joint surface cartilage. In some cases arthroscopy is used to evaluate and treat the damage inside the joint. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is knee arthroscopy?
                                        </p>
                                        <p class="text-justify">
                                            Arthroscopy is a keyhole surgery where a tiny telescope is inserted into the knee joint. The camera allows visualization inside the joint and treatment of meniscal tears, ligament injuries and chondral damage. The advantages of arthroscopy include no muscle cutting, tiny scar, short hospital stay and early recovery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What knee surgeries are performed with arthroscopy?
                                        </p>
                                        <p class="text-justify">
                                            Arthroscopy is used to perform meniscal surgery, ACL/PCL reconstruction, treat infections, perform biopsy and manage cartilage damage.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is ACL reconstruction?
                                        </p>
                                        <p class="text-justify">
                                            ACL ruptures can occur in children and in adults. Half of ACL injuries are associated with injuries to the meniscus, articular cartilage, other ligaments, excessive joint laxity or unfavorable bony anatomy. Successful ACL reconstruction involves identification of such issues in addition to reconstruction of the ACL with a graft. The choice of ACL graft depends on graft availability, type of surgery (primary/ revision), type of sports played and other patient factors. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is revision ACL reconstruction?
                                        </p>
                                        <p class="text-justify">
                                            In scientific literature, graft failure after ACL reconstruction may occur in upto 10-20% cases. ACL reconstruction mostly fails due to poor initial assessment, poor surgery and poor biology. If your ACL reconstruction is painful or if the knee is unstable after surgery, a clinical and radiological analysis would ascertain the cause of failure. The ligament can be reconstructed again in case of such an event.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            When is extraarticular tenodesis performed?
                                        </p>
                                        <p class="text-justify">
                                            It may be recommended for selected cases of primary or revision ACL reconstruction.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            How does the meniscus tear? What are the symptoms?
                                        </p>
                                        <p class="text-justify">
                                            In young people or athletes, meniscal tears are caused due to sudden twisting movements or due to impact injuries. In older people, they occur due repetitive stress and inelasticity of meniscal tissue. Symptoms include pain, swelling, locking and clicking.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What are knee ligament injuries?
                                        </p>
                                        <p class="text-justify">
                                            The knee has 4 main ligaments – ACL, PCL, MCL and LCL. These may be injured due to sports injury or road traffic accidents. Symptoms include pain, swelling, instability, inability to play sports or inability to walk. Treatment plan would depend on clinical and radiological findings.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is ligament reconstruction?
                                        </p>
                                        <p class="text-justify">
                                            Ligament reconstruction is performed to replace torn ligaments for example- anterior cruciate ligament (ACL). The procedure utilizes patients own graft or from a donor.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is multi ligament injury?
                                        </p>
                                        <p class="text-justify">
                                            This occurs when 2 or more ligaments are injured during sports or motor vehicle accidents. It may be associated with damage to nerves and blood vessels. This usually requires surgical treatment.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is patellar dislocation?
                                        </p>
                                        <p class="text-justify">
                                            This occurs when the patella (knee cap) slips out from its groove in the femur. Following one episode the chances of recurrence are 30-45%. Higher recurrence is seen in case of abnormal anatomy of the bones and alignment of the foot. Treatment includes targeted physiotherapy and stretching. Recurrent patellar dislocation is treated with reconstruction of torn ligaments and realignment of the patellar tendon.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is focal chondral damage?
                                        </p>
                                        <p class="text-justify">
                                            Damage to a localized portion of the smooth joint surface may occur due to fall or twisting injuries. This leads to pain, swelling and locking of the knee. The various ways to treat the issue include arthroscopic trimming, microfracture, OATS, allograft chondral plugs or stem cell augmented cartilage transplant.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is patellar tendinitis?
                                        </p>
                                        <p class="text-justify">
                                            Pain in the patellar tendon may occur due to repeated impact activities. Diagnosis is based on clinical findings and MRI scan. Treatment includes physiotherapy, injections or surgery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            When is revision arthroscopy performed?
                                        </p>
                                        <p class="text-justify">
                                            A revision (repeat) arthroscopy may be performed for failed meniscal surgery, retear of meniscus, failed ACL reconstruction or persisting symptoms following surgery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What are the uses of PRP or stem cells (BMAC)?
                                        </p>
                                        <p class="text-justify">
                                            These are new treatments used to treat tendinitis and focal chondral injuries. In arthritis, they may provide temporary pain relief. Their role in reversing arthritis is being currently researched.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    <h5 class="text-info font-weight-normal mb-2">
                                        Knee – Osteotomy & Joint Replacement 
                                    </h5> 
                                </a>
                                <div class="accordion-content">
                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            When do I need a total knee replacement?
                                        </p>
                                        <p class="text-justify">
                                            If you are known to have arthritis with pain, stiffness, swelling, reduced mobility and are unable to do your daily activities it is recommended that you seek expert advice. The decision to undergo this procedure does not rely on x-ray findings. You could lead a comfortable life despite having many x-ray changes. Knee replacement is a lifestyle procedure. Ultimately it is you who decides whether you need the procedure. We aim to place every patient in the top 5% of the best performing total knee replacements among world centres of excellence.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What can I do after a knee replacement?
                                        </p>
                                        <p class="text-justify">
                                            You will be encouraged to walk within hours after the surgery. You can cross your legs, bend your knee and sleep in any position. Studies show over 50% of patients are able to drive within 2-3 weeks of surgery. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is day surgery joint replacement?
                                        </p>
                                        <p class="text-justify">
                                            Patients who are medically stable undergoing minimally invasive joint replacement are able to go home within 24 hours of surgery. Latest muscle preserving surgical techniques result in less pain and enable faster recovery. Early discharge from the hospital prevents hospital-acquired infections and enables rehabilitation in the comforts of your home.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is involved in a total joint replacement?
                                        </p>
                                        <p class="text-justify">
                                            Joint replacement involves: 
                                        </p>
                                        <div class="emergency-contents">
                                            <ul class="mb-0">
                                                <li>Exposure of the joint (lesser tissue damage with minimally invasive techniques)</li>
                                                <li>Removal of affected surfaces of the joint</li>
                                                <li>Resurfacing the ends of the bone with metal prosthesis </li>
                                                <li>Plastic (highly crosslinked) bearing is fitted between the metal surfaces.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            How is pain managed during joint replacement surgery?
                                        </p>
                                        <p class="text-justify">
                                            Pre-surgery medications and anaesthetics are used to block pain fibers. Local anaesthetic mixture is injected into the tissues during the surgery. Dr. Alva was closely involved in developing the local infiltration of anaesthetic (LIA) protocols at Royal national orthopaedic hospital in Stanmore, London.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is a partial knee replacement?
                                        </p>
                                        <p class="text-justify">
                                            In this procedure the surgeon resurfaces only the arthritic aspect of the knee and not the full knee. Most often it may be the inner half of the knee or the patellofemoral joint. Advantages of this procedure are
                                        </p>
                                        <div class="emergency-contents">
                                            <ul class="mb-0">
                                                <li>Smaller incision</li>
                                                <li>50% of the knee is left untouched</li>
                                                <li>Both cruciate ligaments are retained</li>
                                                <li>Recovery is quicker</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is patient specific instrumentation (PSI) knee replacement?
                                        </p>
                                        <p class="text-justify">
                                            This is a relatively new technology. In this surgery, a special preoperative CT/MRI scan is done to design 3D cutting blocks. These blocks are custom made for every patient. The 3D cutting blocks are uniquely designed to match the patient’s anatomy enabling the surgeon to perform precise bone cuts. Advantage of this procedure is smaller incision, muscle sparing, and no intramedullary violation. It reduces postoperative swelling, pain and lowers chances of embolism (clots). Dr Alva utilized PSI technology for 2 years in Australia.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is tissue sparing total knee replacement?
                                        </p>
                                        <p class="text-justify">
                                            This refers to the technique of exposing the knee joint. In this procedure the integrity of tendons around the knee is maintained. This allows less pain and early recovery. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is navigation assisted total knee replacement?
                                        </p>
                                        <p class="text-justify">
                                            Computer assisted navigation is a technology utilized by surgeons to improve accuracy of bone cuts. This technique has been around for over 2 decades. Navigation prevents gross technical errors when surgery is performed.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is robotic knee replacement?
                                        </p>
                                        <p class="text-justify">
                                            In this surgery, the robot assists the surgeon to perform bone cuts. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is osteotomy for knee arthritis?
                                        </p>
                                        <p class="text-justify">
                                            An osteotomy involves cutting the bone to realign the lower limb in order to shift the weight-bearing axis away from the affected half of the joint. It is indicated for localized arthritis associated with bony deformity. The procedure may be performed either on the femur or tibia bone. The procedure is performed under an anaesthetic. Most people are in hospital for 2 nights and will use crutches for 6 weeks.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    <h5 class="text-info font-weight-normal mb-2">
                                        HIP JOINT-Preservation and Replacement 
                                    </h5> 
                                </a>
                                <div class="accordion-content">
                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is hip arthritis?
                                        </p>
                                        <p class="text-justify">
                                            Damage to hip cartilage may be caused by inflammatory arthritis or osteoarthritis due to dysplasia, avascular necrosis, trauma or impingement. This leads to pain in the groin, buttocks, thigh or knee. There may be difficulty in walking, bending down, using stairs or sitting on a bike or car. Treatment includes exercises, weight loss or total hip replacement.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is hip dysplasia?
                                        </p>
                                        <p class="text-justify">
                                            Abnormal development of the hip socket leads to pain in the hip, groin or buttock during exercise, walking, squatting or getting up from a chair. Mostly young women present with these symptoms.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is total hip replacement?
                                        </p>
                                        <p class="text-justify">
                                            In this procedure, the ball and socket of the hip joint are replaced by prosthetic parts. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is involved in a total joint replacement?
                                        </p>
                                        <p class="text-justify">
                                            Joint replacement involves: 
                                        </p>
                                        <div class="emergency-contents">
                                            <ul class="mb-0">
                                                <li>Exposure of the joint (without cutting muscles in bikini/direct anterior approach)</li>
                                                <li>Removal of affected surfaces of the joint</li>
                                                <li>Resurfacing the ends of the bone with metal prosthesis </li>
                                                <li>Plastic (highly crosslinked) bearing is fitted between the metal surfaces</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is day surgery joint replacement?
                                        </p>
                                        <p class="text-justify">
                                            Patients who are medically stable undergoing minimally invasive joint replacement are able to go home within 24 hours of surgery. Latest muscle preserving surgical techniques result in less pain and enable faster recovery. Early discharge from the hospital prevents hospital-acquired infections.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is direct anterior hip replacement (muscle-sparing surgery)?
                                        </p>
                                        <p class="text-justify">
                                            This form of hip replacement is performed from the front of the hip as opposed to traditional hip replacement (from the back or from the side). Anterior hip replacement is a minimally invasive technique preserving muscles and soft tissue. No muscles or tendons are cut to access the hip allowing less pain and early recovery. Dr Alva is fellowship trained to perform direct anterior hip replacements. This approach has been performed in Switzerland and France for several decades with excellent outcomes. Dr. Alva has undergone a dedicated 2-year anterior and bikini hip fellowship in Australia and has published multiple research papers about the technique. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is “Bikini” anterior total hip replacement?
                                        </p>
                                        <p class="text-justify">
                                            Here the scar is cosmetic and can be hidden under the “bikini” or underwear. A true minimally invasive approach, this is a variation of anterior hip replacement .In addition to the horizontal incision,  soft tissues and circumflex vessels are spared compared to the standard direct anterior hip replacement. The procedure protects all muscles of the hip and femoral blood vessels.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What are the advantages of Bikini (Direct Anterior) hip replacement?
                                        </p>
                                        <p class="text-justify">
                                            The research-proven advantages of anterior/ bikini approach are:
                                        </p>
                                        <div class="emergency-contents">
                                            <ul class="mb-0">
                                                <li>Less pain</li>
                                                <li>Less muscle weakness</li>
                                                <li>Early mobilization </li>
                                                <li>Rapid recovery</li>
                                                <li>Lower risk of dislocation</li>
                                                <li>60% of patients (Australia) were able to drive a car in 2-3 weeks after surgery</li>
                                                <li>No need for post surgery precautions as hip stabilizers are preserved</li>
                                            </ul>
                                        </div>
                                        <p class="text-justify">
                                            In addition, most patients discard crutches in few days, are permitted to sleep on any side, able to cross legs, sit on standard chairs, use a normal toilet without raised seat and do not need rehab after the surgery. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            Are all patients suitable for bikini hip replacement procedure?
                                        </p>
                                        <p class="text-justify">
                                            Majority of patients are suitable for the procedure. Dr. Alva is trained to perform all approaches to the hip, allowing him to make an informed decision on the technique.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is the best surgical approach to the hip?
                                        </p>
                                        <p class="text-justify">
                                            Various approaches to the hip include bikini (direct anterior), lateral and posterior approach. All approaches have benefits and risks. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is hip arthroscopy?
                                        </p>
                                        <p class="text-justify">
                                            Arthroscopy of the hip is a keyhole procedure performed to treat cartilage tears, loose bodies, synovitis and bony lesions. The procedure is performed under general anaesthetic with legs placed in a traction device. Usually 2-3 tiny incisions are made to introduce the camera and instruments. Walking is allowed with crutches after surgery. Return to sports can take upto 3 months.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is FAI?
                                        </p>
                                        <p class="text-justify">
                                            Femoroacetabular impingement (FAI) can lead to hip pain. It results from abnormal bony configuration of the femoral head and or acetabular socket. This may cause damage to the joint cartilage, labral tears and lead to osteoarthritis. FAI is multifactorial and may be seen in sportspersons and the general population. Symptomatic FAI may be treated with activity modification +/- hip arthroscopy.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is trochanteric hip bursitis?
                                        </p>
                                        <p class="text-justify">
                                            Bursa is a fluid filled sac around a joint. The bursa around the hip joint can become inflamed leading to pain and swelling. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is labrum tear?
                                        </p>
                                        <p class="text-justify">
                                            Labrum is a joint stabilizing tissue seen at the rim of the hip socket. The labrum can tear due to repetitive motion or due to trauma. This can lead to pain, locking, instability and loss of strength. Treatment includes rest, medications and arthroscopic repair/reconstruction.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is ITB syndrome?
                                        </p>
                                        <p class="text-justify">
                                            The iliotibial band runs outside the knee. Running or cycling can cause inflammation of the bursa underneath the ITB. Treatment includes physiotherapy, injections and ITB release/lengthening.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            When is a partial hip replacement (hemiarthroplasty) performed?
                                        </p>
                                        <p class="text-justify">
                                            Hemiarthroplasty is performed for fractures of the neck of femur. It is generally seen in older population. It is recommended that this procedure be performed early to enable the patient to mobilize and prevent complications of immobility.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            When is hip arthroscopy performed?
                                        </p>
                                        <p class="text-justify">
                                            Hip arthroscopy is used to treat impingement, avascular necrosis, infection, bursitis, tendinitis and to perform tissue biopsy.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    <h5 class="text-info font-weight-normal mb-2">
                                        Shoulder Joint
                                    </h5> 
                                </a>
                                <div class="accordion-content">
                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is shoulder arthroscopy?
                                        </p>
                                        <p class="text-justify">
                                            Arthroscopy is a keyhole surgery where a tiny telescope is inserted into the joint. The camera allows visualization inside the joint and treatment of variety of problems. The advantages of arthroscopy include no muscle cutting, tiny scar, short hospital stay and early recovery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What conditions are treated with shoulder arthroscopy?
                                        </p>
                                        <p class="text-justify">
                                            Shoulder arthroscopy is used to treat instability (labrum tears), cuff tear, frozen shoulder, recurrent dislocation, ACJ disruption and biceps tendinitis.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is frozen shoulder?
                                        </p>
                                        <p class="text-justify">
                                            Frozen shoulder causes pain and stiffness of the shoulder due to thickening and tightness of the shoulder capsule. It affects middle-aged people and is seen in upto 20% of diabetics.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is shoulder dislocation? What is labrum tear?
                                        </p>
                                        <p class="text-justify">
                                            Shoulder dislocation occurs when the ball slips out of the socket. This occurs due to trauma and laxity in tissues. The labrum is a joint stabilizing tissue seen at the rim of the shoulder socket. The labrum can tear due to repetitive motion or due to a dislocation. This can lead to pain, locking, repeated dislocation and loss of strength. Treatment includes rest, medications and arthroscopic repair/reconstruction.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is rotator cuff tear?
                                        </p>
                                        <p class="text-justify">
                                            The rotator cuff is a blend of 4 tendons, which covers the shoulder joint. It helps to link the arm to the shoulder blade. Repetitive stress due to sports or age related changes can lead to a partial or complete tear. It is most common in middle and old age. It may be treated with an exercise programme or arthroscopic surgery to reattach the tendon to the humerus. If the cuff is irreparable, other surgical options like tendon transfer/graft may be utilized.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What happens if rotator cuff repair fails?
                                        </p>
                                        <p class="text-justify">
                                            In case a rotator cuff does not heal leading to pain and loss of function, it may be treated with a revision arthroscopy. In case the tissue is irreparable a patch graft or tendon transfer is performed. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is biceps tendinitis in the shoulder?
                                        </p>
                                        <p class="text-justify">
                                            This is inflammation of the biceps tendon where it attaches inside the shoulder joint. It occurs due to chronic wear and tear or due to repeated overhead activities like racquet sports/ swimming. It may be associated with osteoarthritis, shoulder instability and rotator cuff tears. Treatment includes activity modification, analgesic medications, injections or surgery (tenotomy/tenodesis).
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is shoulder osteoarthritis?
                                        </p>
                                        <p class="text-justify">
                                            As the cartilage wears out with many years of activity, the joint may become stiff and painful. A diagnosis can be made with clinical examination, x-rays’ and scans. Treatment includes analgesics, exercises, injections or surgery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is shoulder joint replacement?
                                        </p>
                                        <p class="text-justify">
                                            Shoulder joint replacement is performed when shoulder joint is affecting your day-to-day activities and has not improved with non-operative treatment. It may be recommended for osteoarthritis, secondary arthritis or complex fractures. The procedure includes replacing the damaged area with a prosthesis forming a ball and socket.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    <h5 class="text-info font-weight-normal mb-2">
                                        Elbow, Wrist and Hand
                                    </h5> 
                                </a>
                                <div class="accordion-content">
                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is carpal tunnel syndrome?
                                        </p>
                                        <p class="text-justify">
                                            Compression of the median nerve in the carpal tunnel (in the palm) leads to pins and needles in the fingers and weakness of the hand. If symptoms persist, the nerve can be released with open/arthroscopic visualization. Arthroscopic release allows early recovery and reduces problems with wound healing.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is tennis elbow?
                                        </p>
                                        <p class="text-justify">
                                            Pain on the outer side of the elbow occurs due to tendinitis. It may occur due to repetitive strain and causes pain and loss of grip strength. Treatment includes complete rest, brace, injections and in unresponsive cases surgery may be indicated.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is cubital tunnel syndrome?
                                        </p>
                                        <p class="text-justify">
                                            This is compression of the ulnar nerve at the elbow. This may lead to tingling sensation and weakness of the fingers. If symptoms persist despite nonsurgical treatment, the nerve can be surgically decompressed and moved away from the tight tunnel. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            How is biceps tendon tear treated?
                                        </p>
                                        <p class="text-justify">
                                            Torn biceps tendon at the elbow is treated either nonoperatively or repaired with sutures and screws.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            When is elbow or wrist arthroscopy performed?
                                        </p>
                                        <p class="text-justify">
                                            They are performed to treat stiffness, remove loose bodies, TFCC tears, and infection.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            When is tendon release performed?
                                        </p>
                                        <p class="text-justify">
                                            Tendon release procedures are performed for tennis elbow, trigger finger, de quervains disease, and dupuytrens contracture.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            When is nerve release indicated?
                                        </p>
                                        <p class="text-justify">
                                            Nerve release may be performed by endoscopic or open technique. They are indicated for severe carpal tunnel syndrome or cubital tunnel syndrome.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is trigger finger?
                                        </p>
                                        <p class="text-justify">
                                            Fingers/ thumb may get stuck while folding or making a fist. This occurs due to thickening of the flexor sheath. It may be associated with diabetes, inflammatory arthritis or sports activities. Treatment includes rest, splints, injections and surgical release of the tendon sheath.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What are ganglions?
                                        </p>
                                        <p class="text-justify">
                                            Ganglions are fluid filled cysts commonly seen in the wrist. These may be left alone if asymptomatic. If symptomatic, the ganglion may be removed with its root in the capsule.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            Can osteoarthritis affect the thumb?
                                        </p>
                                        <p class="text-justify">
                                            Yes. Osteoarthritis commonly affects the base of the thumb. This can lead to pain, swelling and loss of grip strength. Treatment includes splints, injections, and surgery.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    <h5 class="text-info font-weight-normal mb-2">
                                        Foot and Ankle
                                    </h5> 
                                </a>
                                <div class="accordion-content">
                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is ankle sprain?
                                        </p>
                                        <p class="text-justify">
                                            Sudden twisting of the ankle (commonly an inversion injury) can lead to torn ligaments commonly called ankle sprain. Majority of them heal in a few days. However, serious sprains that do not recover need further investigation and treatment.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What causes heel pain?
                                        </p>
                                        <p class="text-justify">
                                            Heel pain may be caused by inflammation of plantar fascia, osteoarthritis, nerve irritation or stress fracture. Treatment includes rest, analgesia, physiotherapy, injections or surgery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What are ingrown toenails?
                                        </p>
                                        <p class="text-justify">
                                            When a toenail curves and grows into the skin it leads to pain, redness and infection. It may be caused by sports injury, fungal infection or tight shoes. Treatment includes antibiotics and removal of part/complete nail and nailbed.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                           What are stress fractures?
                                        </p>
                                        <p class="text-justify">
                                            A stress fracture is a crack in the bone caused due to significant overuse or poor mineralization. It may be associated with eating disorders and osteoporosis. They commonly occur in the shin, foot and ankle. Treatment includes complete rest, modified training programmes, custom footwear and surgery (if early return to sport is desired).
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is ankle arthritis?
                                        </p>
                                        <p class="text-justify">
                                            Loss of ankle joint cartilage occurs due to previous trauma, rheumatoid arthritis, gout etc. It leads to pain, stiffness and locking. Treatment includes activity modification, analgesics, brace, injections. Surgical treatment includes arthroscopy, fusion or joint replacement.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What are bunions (hallux valgus)?
                                        </p>
                                        <p class="text-justify">
                                            Bunions are a commonly seen deformity in the big toe of the foot. This may cause pain and difficulty in wearing footwear. Bunions may be treated with orthotics or with osteotomy. Scarf/ Akin osteotomies correct the deformity and are performed as a day case procedure. 
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is plantar fasciitis?
                                        </p>
                                        <p class="text-justify">
                                            This is inflammation of the plantar fascia where it joins the heel bone. It may be caused by repetitive strain, marathons, obesity, rheumatoid arthritis. Treatment involves analgesics, ice, stretching, night splints, injections and endoscopic surgical release.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is osteochondral injury?
                                        </p>
                                        <p class="text-justify">
                                            Injury to the smooth cartilage in the ankle joint can occur spontaneously or due to injury. Treatment may be conservative or arthroscopic surgery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is Morton’s neuroma?
                                        </p>
                                        <p class="text-justify">
                                            A small tumour in the nerve in the foot may lead to pain and numbness. This is treated with shoe modifications, injections or surgery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            When is fusion performed in the foot?
                                        </p>
                                        <p class="text-justify">
                                            Fusion (a procedure which irreversibly join bones) is often used to treat claw toes, ankle arthritis and big toe arthritis. It is used to treat pain and deformity.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    <h5 class="text-info font-weight-normal mb-2">
                                        Spine
                                    </h5> 
                                </a>
                                <div class="accordion-content">
                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is Sciatica?
                                        </p>
                                        <p class="text-justify">
                                            Pressure on the sciatic nerve can lead to pain in the lower back radiating down the leg. Commonly it is caused by a slipped disc. Treatment includes analgesics, ice packs, injections and discectomy or fusion surgery.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What is slipped disc?
                                        </p>
                                        <p class="text-justify">
                                            The rubbery cartilage (disc) between vertebras may split open allowing the inner portion of the disc to spread out and press on the adjacent nerve. Treatment includes analgesics/ injections and a rehabilitation programme. If symptoms are severe or if nonoperative treatment fails, a discectomy is offered.
                                        </p>
                                    </div>

                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            What are spinal injections?
                                        </p>
                                        <p class="text-justify">
                                            Spinal injections contain local anaesthetics and steroids and are used to treat severe pain caused due to slipped discs, osteoarthritis or spinal stenosis. These include caudal epidural, nerve block or facet joint injections.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    <h5 class="text-info font-weight-normal mb-2">
                                        Covid
                                    </h5> 
                                </a>
                                <div class="accordion-content">
                                    <div class="pb-4">
                                        <p class="mb-0 font-weight-bold text-justify">
                                            I am worried about catching COVID in hospitals.
                                        </p>
                                        <p class="text-justify">
                                            We encourage all patients to undergo appropriate vaccination. Hospitals ensure that surgical services are provided in covid free blocks. We ensure that the following precautions are in place whenever you choose to go ahead with surgery.
                                        </p>
                                        <div class="emergency-contents">
                                            <ul class="mb-0">
                                                <li>Preoperative COVID test for all patients</li>
                                                <li>All staff vaccinated and regularly tested </li>
                                                <li>Early recovery protocols and tissue sparing surgery to enable short hospital stay</li>
                                                <li>Day case surgery in suitable cases</li>
                                            </ul>
                                        </div>
                                    </div>                                    
                                </div>
                            </li> --}}
                        </ul>
                    </div>   
                    <p class="font-12pt mt-4 text-right font-weight-bold font-italic">
                        (This information is only a guideline; kindly consult a specialist)
                    </p>         
                </div>
            </div>
        </div>
    </section>

    {{-- @include('website.associationSection') --}}

    @include('website.appointmentSection')
@endsection


{{-- @section('my-script')

@endsection --}}