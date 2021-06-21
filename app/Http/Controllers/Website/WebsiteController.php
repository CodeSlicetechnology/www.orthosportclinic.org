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
use Auth;

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

        $data = [
            'homeSectionOne' => $homeSectionOne,
            'commonProcedures' => $commonProcedures,
            // 'associations' => $associations,
            'aboutDoctor' => $aboutDoctor
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
        
        $data = [
            'associations' => $associations,
            'aboutDoctor' => $aboutDoctor
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
        
        $data = [
            // 'associations' => $associations,
            'conditionsAndTreatments' => $conditionsAndTreatments
        ];
        return view('website.conditions-and-treatments')->with(["page" => "condTrt", "data" => $data]);
    }

    
    /**
     * Gallery us page
     *
     * @return Gallery us page blade
     */
    public function gallery()
    {
        $id = "NA";
        $paginate = 0;
        $galleryImages = GalleryImages::viewGalleryImages($id, $paginate);
        
        $data = [
            'galleryImages' => $galleryImages
        ];
        return view('website.gallery')->with(["page" => "gallery", "data" => $data]);
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
        
        $data = [
            'clinicalImages' => $clinicalImages
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
        return view('website.blogs')->with(["page" => "blogs"]);
    }

    
    /**
     * Contact us page
     *
     * @return Contact us page blade
     */
    public function contact()
    {
        return view('website.contact')->with(["page" => "contact"]);
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
        
        return redirect()->back()->with('success', 'Message Submitted!');

    }
}
