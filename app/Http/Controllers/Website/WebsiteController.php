<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\CommonProcedures;
use App\Models\Association;
use App\Models\AboutDoctor;
use App\Models\HomeSectionOne;
use App\Models\ConditionsAndTreatments;
use App\Models\ClinicalImages;
use App\Models\GalleryImages;
use App\Models\ContactForm;
use App\Models\Blogs;
use App\Models\ContactDetails;
use App\Models\ContactAddress;
use App\Models\GalleryVideos;
use Auth;
use Mail;

class WebsiteController extends Controller
{
    /**
     * Landing page
     *
     * @return landing page blade
     */
    public function index()
    {
        $id = "NA";
        $paginate = 0;
        $pageFlag = false;
        $commonProcedures = CommonProcedures::viewCommonProcedures($id, $paginate);
        // $associations = Association::viewAssociation($id, $paginate);
        $aboutDoctor = AboutDoctor::viewAboutDoctor($id, $pageFlag);
        $homeSectionOne = HomeSectionOne::viewHomeSectionOne($id);
        $contactDetails = ContactDetails::viewContactDetails(1);

        $data = [
            'homeSectionOne' => $homeSectionOne,
            'commonProcedures' => $commonProcedures,
            // 'associations' => $associations,
            'aboutDoctor' => $aboutDoctor,
            'contactDetails' => $contactDetails
        ];
        return view('website.landingPage')->with(["page" => "home", "data" => $data]);
    }

    
    /**
     * About Dr.Ala page
     *
     * @return About Dr.Ala page blade
     */
    public function about()
    {
        $id = "NA";
        $paginate = 0;
        $pageFlag = true;
        $associations = Association::viewAssociation($id, $paginate);
        $aboutDoctor = AboutDoctor::viewAboutDoctor($id, $pageFlag);
        $contactDetails = ContactDetails::viewContactDetails(1);
        
        $data = [
            'associations' => $associations,
            'aboutDoctor' => $aboutDoctor,
            'contactDetails' => $contactDetails
        ];
        return view('website.about')->with(["page" => "about", "data" => $data]);
    }

    
    /**
     * Conditions & Treatments page
     *
     * @return Conditions & Treatments page blade
     */
    public function conditionsAndTreatments()
    {
        $id = "NA";
        $paginate = 0;
        // $associations = Association::viewAssociation($id, $paginate);
        $conditionsAndTreatments = ConditionsAndTreatments::viewConditionsAndTreatments($id);
        $contactDetails = ContactDetails::viewContactDetails(1);
        
        $data = [
            // 'associations' => $associations,
            'conditionsAndTreatments' => $conditionsAndTreatments,
            'contactDetails' => $contactDetails
        ];
        return view('website.conditions-and-treatments')->with(["page" => "condTrt", "data" => $data]);
    }

    
    /**
     * Gallery images page
     *
     * @return Gallery images page blade
     */
    public function galleryImagesView()
    {
        $id = "NA";
        $paginate = 0;
        $galleryImages = GalleryImages::viewGalleryImages($id, $paginate);
        $contactDetails = ContactDetails::viewContactDetails(1);
        
        $data = [
            'galleryImages' => $galleryImages,
            'contactDetails' => $contactDetails
        ];
        return view('website.gallery-images')->with(["page" => "gallery", "data" => $data]);
    }

    
    /**
     * Gallery Videos page
     *
     * @return Gallery Videos page blade
     */
    public function galleryVideosView()
    {
        $id = "NA";
        $paginate = 0;
        $galleryVideos = GalleryVideos::viewGalleryVideos($id, $paginate);
        $contactDetails = ContactDetails::viewContactDetails(1);
        
        $data = [
            'galleryVideos' => $galleryVideos,
            'contactDetails' => $contactDetails
        ];
        return view('website.gallery-videos')->with(["page" => "gallery", "data" => $data]);
    }

    
    /**
     * Clinical Images page
     *
     * @return Clinical Images page blade
     */
    public function clinicalImages()
    {
        $id = "NA";
        $paginate = 0;
        $clinicalImages = ClinicalImages::viewClinicalImages($id, $paginate);
        $contactDetails = ContactDetails::viewContactDetails(1);
        
        $data = [
            'clinicalImages' => $clinicalImages,
            'contactDetails' => $contactDetails
        ];
        return view('website.clinical-images')->with(["page" => "clinicalImg", "data" => $data]);
    }

    
    /**
     * Blogs page
     *
     * @return Blogs page blade
     */
    public function blogs()
    {
        $id = "NA";
        $paginate = 0;
        $blogs = Blogs::viewBlogs($id, $paginate);
        $contactDetails = ContactDetails::viewContactDetails(1);
        
        $data = [
            'blogs' => $blogs,
            'contactDetails' => $contactDetails
        ];
        return view('website.blogs')->with(["page" => "blogs", "data" => $data]);
    }

    
    /**
     * Blogs details page
     *
     * @return Blogs details page blade
     */
    public function blogDetails($id) {
        $id = $id;
        $paginate = 0;
        $blogs = Blogs::viewBlogs($id, $paginate);
        $contactDetails = ContactDetails::viewContactDetails(1);
        
        $data = [
            'blogs' => $blogs,
            'contactDetails' => $contactDetails
        ];
        if (count($data['blogs']) > 0) {
            return view('website.blog-details')->with(["page" => "blogs", "data" => $data]);
        } else {
            return redirect('blogs');
        }
    }

    
    /**
     * Contact us page
     *
     * @return Contact us page blade
     */
    public function contact()
    {
        $id = "NA";
        $paginate = 0;
        $contactAddress = ContactAddress::viewContactAddress($id, $paginate);
        $contactDetails = ContactDetails::viewContactDetails(1);
        
        $data = [
            'contactDetails' => $contactDetails,
            'contactAddress' => $contactAddress
        ];
        return view('website.contact')->with(["page" => "contact", "data" => $data]);
    }

    public function saveContact(Request $request) {        
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|max:50|email',
            'phone_number'=> 'numeric|digits:10',
            'msg_subject' => 'required|max:65',
            'message' => 'required|max:150'
        ]);

        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['phone'] = $request->get('phone_number');
        $data['subject'] = $request->get('msg_subject');
        $data['message'] = $request->get('message');
        ContactForm::addContactForm($data);
        $data['messageText'] = $request->get('message');

        Mail::send('mail.mail', $data, function($message) use ($data){
            $message->to('clinicorthosport@gmail.com', 'Ortho Sport Clinic')->subject('Contact Details - Ortho Sport Clinic');
            $message->from('noreply@orthosportclinic.org','Ortho Sport Clinic |'.$data['name']);
        });
        
        return redirect()->back()->with('success', 'Message Submitted!');

    }
}
