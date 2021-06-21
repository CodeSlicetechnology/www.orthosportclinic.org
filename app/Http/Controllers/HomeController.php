<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use App\Models\HomeSectionOne;
use App\Models\AboutDoctor;
use App\Models\DoctorImages;
use App\Models\DoctorQualification;
use App\Models\CommonProcedures;
use App\Models\ConditionsAndTreatments;
use App\Models\AboutSectionOne;
use App\Models\AboutSectionTwo;
use App\Models\Association;
use App\Models\ResearchPublishImages;
use App\Models\ClinicalImages;
use App\Models\GalleryImages;
use App\Models\Blogs;
use Illuminate\Support\Facades\File;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $id = "NA";
        $homeSectionOne = HomeSectionOne::viewHomeSectionOne($id);
        return view('admin.landing-page')->with(["page" => "landingPage", "homeSectionOne" => $homeSectionOne]);
    }


    public function bannerUpdate(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'mainTitle'=>'required|max:50',
            'subTitle1'=>'required|max:100',
            'subTitle2'=>'required|max:100',
            'imagePath1' => 'mimes:jpeg,jpg,png|max:'.$maxSize
        ]);

        $filename = "";
        $file_path = "";
        $todayDate = date("d-m-YHis");
        if ($request->hasFile('imagePath1')) {
            $file = Input::file('imagePath1');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . '-' . $todayDate . '.' . $extension;
                $destinationPath = 'storage/infographic/';
                $file->move($destinationPath, $filename);
                
                // $file_path = URL::to('') . "/" . $destinationPath . "" . $filename;
                $file_path = $destinationPath . "" . $filename;                
            }
        }

        $data['main_title'] = $request->get('mainTitle');
        $data['sub_title_1'] = $request->get('subTitle1');
        $data['sub_title_2'] = $request->get('subTitle2');
        $data['updated_by'] = Auth::user()->id;   
        
        if ($file_path != "") {            
            $oldImagePath1 = $request->get('oldImagePath1');
            if(file_exists($oldImagePath1)){
                unlink($oldImagePath1);
            }
            $data['image_path'] = $file_path;
        }     
        HomeSectionOne::updateHomeSectionOne(1, $data);

        return redirect()->back()->with('success', 'Banner content updated successfully');
    }

    public function aboutLanding() {
        $id = "NA";
        $pageFlag = false;
        $aboutDoctor = AboutDoctor::viewAboutDoctor($id, $pageFlag);
        return view('admin.about-landing')->with(["page" => "landingPage", "aboutDoctor" => $aboutDoctor]);
    }


    public function landingAboutUpdate(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'doctorName'=>'required|max:100',
            'subTitle'=>'required|max:100',
            'landing_desc'=>'required',
            'imagePath1' => 'mimes:jpeg,jpg,png|max:'.$maxSize
        ]);

        $filename = "";
        $file_path = "";
        $todayDate = date("d-m-YHis");
        if ($request->hasFile('imagePath1')) {
            $file = Input::file('imagePath1');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . '-' . $todayDate . '.' . $extension;
                $destinationPath = 'storage/doctor/';
                $file->move($destinationPath, $filename);
                
                // $file_path = URL::to('') . "/" . $destinationPath . "" . $filename;
                $file_path = $destinationPath . "" . $filename;                
            }
        }

        $data['doctorName'] = $request->get('doctorName');
        $data['subTitle'] = $request->get('subTitle');
        $data['landing_desc'] = $request->get('landing_desc');
        $data['updated_by'] = Auth::user()->id;   
        
        if ($file_path != "") {            
            $oldImagePath1 = $request->get('oldImagePath1');
            if(file_exists($oldImagePath1)){
                unlink($oldImagePath1);
            }
            $data1['image_path'] = $file_path;
            $data1['image_type'] = "landingPage";
            $data1['updated_by'] = Auth::user()->id;   
            DoctorImages::updateDoctorImages(1, $data1);
        }     
        AboutDoctor::updateAboutDoctor(1, $data);

        DoctorQualification::where('about_doctors_id', 1)->delete();

        $data2['userId'] = Auth::user()->id;
        $data2['about_doctors_id'] = 1;
        for ($i=0; $i < 7; $i++) { 
            $data2['qualification'] = $request->get('qualification-'.$i);
            $data2['sequence'] = $i+1;
            DoctorQualification::addDoctorQualification($data2);
        }

        return redirect()->back()->with('success', 'About content updated successfully');
    }

    public function commonProcedures() {
        $id = "NA";
        $pageFlag = false;
        $commonProcedures = CommonProcedures::viewCommonProcedures($id, $pageFlag);
        return view('admin.common-procedures')->with(["page" => "landingPage", "commonProcedures" => $commonProcedures]);
    }
    
    public function commonProceduresEdit($id) {
        $id = $id;
        $pageFlag = false;
        $commonProcedures = CommonProcedures::viewCommonProcedures($id, $pageFlag);

        if (count($commonProcedures) > 0) {
            return view('admin.common-procedures-edit')->with(["page" => "landingPage", "commonProcedures" => $commonProcedures]);
        } else {
            return redirect('common-procedures');
        }
    }

    public function commonProceduresUpdate(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'title'=>'required|max:150',
            'description'=>'required',
            'commonProceduresID'=>'required',
        ]);

        $commonProceduresID = $request->get('commonProceduresID');
        
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['updated_by'] = Auth::user()->id;   
        CommonProcedures::updateCommonProcedures($commonProceduresID, $data);
        
        return redirect()->back()->with('success', 'Common Procedures updated successfully');
    }

    

    public function conditionsTreatmentsList() {
        $id = "NA";
        $paginate = 0;
        $conditionsAndTreatments = ConditionsAndTreatments::viewConditionsAndTreatments($id);
        return view('admin.conditions-treatments-list')->with(["page" => "cndTrtPage", "conditionsAndTreatments" => $conditionsAndTreatments]);
    }
    
    public function conditionsTreatmentsEdit($id) {
        $id = $id;
        $pageFlag = false;
        $conditionsAndTreatments = ConditionsAndTreatments::viewConditionsAndTreatments($id, $pageFlag);

        if (count($conditionsAndTreatments) > 0) {
            return view('admin.conditions-treatments-edit')->with(["page" => "cndTrtPage", "conditionsAndTreatments" => $conditionsAndTreatments]);
        } else {
            return redirect('conditions-treatments-list');
        }
    }

    public function conditionsTreatmentsUpdate(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'title'=>'required|max:150',
            'description'=>'required',
            'conditionsAndTreatmentsID'=>'required',
        ]);

        $conditionsAndTreatmentsID = $request->get('conditionsAndTreatmentsID');
        
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['updated_by'] = Auth::user()->id;   
        ConditionsAndTreatments::updateConditionsAndTreatments($conditionsAndTreatmentsID, $data);
        
        return redirect()->back()->with('success', 'Conditions & Treatments updated successfully');
    }


    

    public function aboutFirstSection() {
        $id = "NA";
        $pageFlag = true;
        $aboutDoctor = AboutDoctor::viewAboutDoctor($id, $pageFlag);
        return view('admin.about-first-section')->with(["page" => "aboutPage", "aboutDoctor" => $aboutDoctor]);
    }


    public function aboutFirstSectionUpdate(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'doctorName'=>'required|max:100',
            'subTitle'=>'required|max:100',
            'landing_desc'=>'required',
            'imagePath1' => 'mimes:jpeg,jpg,png|max:'.$maxSize
        ]);

        $filename = "";
        $file_path = "";
        $todayDate = date("d-m-YHis");
        if ($request->hasFile('imagePath1')) {
            $file = Input::file('imagePath1');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . '-' . $todayDate . '.' . $extension;
                $destinationPath = 'storage/doctor/';
                $file->move($destinationPath, $filename);
                
                // $file_path = URL::to('') . "/" . $destinationPath . "" . $filename;
                $file_path = $destinationPath . "" . $filename;                
            }
        }

        $data['doctorName'] = $request->get('doctorName');
        $data['subTitle'] = $request->get('subTitle');
        $data['updated_by'] = Auth::user()->id;   
        
        if ($file_path != "") {            
            $oldImagePath1 = $request->get('oldImagePath1');
            if(file_exists($oldImagePath1)){
                unlink($oldImagePath1);
            }
            $data1['image_path'] = $file_path;
            $data1['image_type'] = "aboutPage";
            $data1['updated_by'] = Auth::user()->id;   
            DoctorImages::updateDoctorImages(2, $data1);
        }     
        AboutDoctor::updateAboutDoctor(1, $data);

        DoctorQualification::where('about_doctors_id', 1)->delete();

        $data2['userId'] = Auth::user()->id;
        $data2['about_doctors_id'] = 1;
        for ($i=0; $i < 7; $i++) { 
            $data2['qualification'] = $request->get('qualification-'.$i);
            $data2['sequence'] = $i+1;
            DoctorQualification::addDoctorQualification($data2);
        }
        
        $data3['description'] = $request->get('landing_desc');
        $data3['updated_by'] = Auth::user()->id;  
        AboutSectionOne::updateAboutSectionOne(1, $data3);
        return redirect()->back()->with('success', 'Section One content updated successfully');
    }

    
    public function aboutSecondSection() {
        $id = "NA";
        $pageFlag = true;
        $aboutDoctor = AboutDoctor::viewAboutDoctor($id, $pageFlag);
        return view('admin.about-second-section')->with(["page" => "aboutPage", "aboutDoctor" => $aboutDoctor]);
    }
    
    public function aboutSecondSectionEdit($id) {
        $id = $id;
        $aboutSectionTwo = AboutSectionTwo::viewAboutSectionTwo($id);

        if (count($aboutSectionTwo) > 0) {
            return view('admin.about-second-section-edit')->with(["page" => "aboutPage", "aboutSectionTwo" => $aboutSectionTwo]);
        } else {
            return redirect('about-second-section');
        }
    }

    public function aboutSecondSectionUpdate(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'title'=>'required|max:150',
            'description'=>'required',
            'aboutSectionTwoID'=>'required',
        ]);

        $aboutSectionTwoID = $request->get('aboutSectionTwoID');
        
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['updated_by'] = Auth::user()->id;   
        AboutSectionTwo::updateAboutSectionTwo($aboutSectionTwoID, $data);
        
        return redirect()->back()->with('success', 'Section Two content updated successfully');
    }

    public function showChangePasswordForm(){
        return view('admin.change-password')->with(["page" => "changepasswordPage"]);
    }

    public function changePassword(Request $request){
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("success","Password changed successfully !");
 
    }

    public function associationImages() {
        $id = "NA";
        $paginate = 0;
        $associations = Association::viewAssociation($id, $paginate);
        return view('admin.association-images')->with(["page" => "imagesPage", "associations" => $associations]);
    }

    public function associationImageUpload(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'imagePath' => 'mimes:jpeg,jpg,png|max:'.$maxSize
        ]);

        $filename = "";
        $file_path = "";
        $todayDate = date("d-m-YHis");
        if ($request->hasFile('imagePath')) {
            $file = Input::file('imagePath');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . '-' . $todayDate . '.' . $extension;
                $destinationPath = 'storage/associations/';
                $file->move($destinationPath, $filename);
                
                // $file_path = URL::to('') . "/" . $destinationPath . "" . $filename;
                $file_path = $destinationPath . "" . $filename;                
            }
        }

        $data['image_path'] = $file_path;
        $data['sequence'] = 0;
        $data['userId'] = Auth::user()->id;
        Association::addAssociation($data);

        return redirect()->back()->with('success', 'Image uploaded successfully');
    }
    
    public function associationImageDelete($id) {
        $id = $id;
        Association::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Image deleted successfully');
    }

    

    public function rpScreenshots() {
        $id = "NA";
        $paginate = 0;
        $researchPublishImages = ResearchPublishImages::viewResearchPublishImages($id, $paginate);
        return view('admin.rp-screenshots')->with(["page" => "imagesPage", "researchPublishImages" => $researchPublishImages]);
    }

    public function rpScreenshotsUpload(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'imagePath' => 'mimes:jpeg,jpg,png|max:'.$maxSize
        ]);

        $filename = "";
        $file_path = "";
        $todayDate = date("d-m-YHis");
        if ($request->hasFile('imagePath')) {
            $file = Input::file('imagePath');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . '-' . $todayDate . '.' . $extension;
                $destinationPath = 'storage/screenshots/';
                $file->move($destinationPath, $filename);
                
                // $file_path = URL::to('') . "/" . $destinationPath . "" . $filename;
                $file_path = $destinationPath . "" . $filename;                
            }
        }

        $data['image_path'] = $file_path;
        $data['sequence'] = 0;
        $data['about_doctors_id'] = 1;
        $data['userId'] = Auth::user()->id;
        ResearchPublishImages::addResearchPublishImages($data);

        return redirect()->back()->with('success', 'Image uploaded successfully');
    }
    
    public function rpScreenshotsDelete($id) {
        $id = $id;
        ResearchPublishImages::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Image deleted successfully');
    }

    

    public function clinicalImages() {
        $id = "NA";
        $paginate = 0;
        $clinicalImages = ClinicalImages::viewClinicalImages($id, $paginate);
        return view('admin.clinical-images')->with(["page" => "imagesPage", "clinicalImages" => $clinicalImages]);
    }

    public function clinicalImagesUpload(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'imagePath' => 'mimes:jpeg,jpg,png|max:'.$maxSize
        ]);

        $filename = "";
        $file_path = "";
        $todayDate = date("d-m-YHis");
        if ($request->hasFile('imagePath')) {
            $file = Input::file('imagePath');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . '-' . $todayDate . '.' . $extension;
                $destinationPath = 'storage/clinical/';
                $file->move($destinationPath, $filename);
                
                // $file_path = URL::to('') . "/" . $destinationPath . "" . $filename;
                $file_path = $destinationPath . "" . $filename;                
            }
        }

        $data['image_path'] = $file_path;
        $data['sequence'] = 0;
        $data['description'] = "";
        $data['userId'] = Auth::user()->id;
        ClinicalImages::addClinicalImages($data);

        return redirect()->back()->with('success', 'Image uploaded successfully');
    }
    
    public function clinicalImagesDelete($id) {
        $id = $id;
        ClinicalImages::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Image deleted successfully');
    }

    

    public function galleryImages() {
        $id = "NA";
        $paginate = 0;
        $galleryImages = GalleryImages::viewGalleryImages($id, $paginate);
        return view('admin.gallery-images')->with(["page" => "imagesPage", "galleryImages" => $galleryImages]);
    }

    public function galleryImagesUpload(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'imagePath' => 'mimes:jpeg,jpg,png|max:'.$maxSize
        ]);

        $filename = "";
        $file_path = "";
        $todayDate = date("d-m-YHis");
        if ($request->hasFile('imagePath')) {
            $file = Input::file('imagePath');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . '-' . $todayDate . '.' . $extension;
                $destinationPath = 'storage/gallery/';
                $file->move($destinationPath, $filename);
                
                // $file_path = URL::to('') . "/" . $destinationPath . "" . $filename;
                $file_path = $destinationPath . "" . $filename;                
            }
        }

        $data['image_path'] = $file_path;
        $data['sequence'] = 0;
        $data['description'] = $request->get('description');
        $data['userId'] = Auth::user()->id;
        GalleryImages::addGalleryImages($data);

        return redirect()->back()->with('success', 'Image uploaded successfully');
    }
    
    public function galleryImagesDelete($id) {
        $id = $id;
        GalleryImages::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Image deleted successfully');
    }


    
    public function blogsList() {
        $id = "NA";
        $paginate = 0;
        $blogs = Blogs::viewBlogs($id, $paginate);
        return view('admin.blogs-list')->with(["page" => "blogsPage", "blogs" => $blogs]);
    }


    
    public function newBlog() {
        return view('admin.blogs-add')->with(["page" => "blogsPage"]);
    }

    public function blogsEdit($id) {
        $id = $id;
        $paginate = 0;
        $blogs = Blogs::viewBlogs($id, $paginate);

        if (count($blogs) > 0) {
            return view('admin.blogs-edit')->with(["page" => "blogsPage", "blogs" => $blogs]);
        } else {
            return redirect('blogs-list');
        }
    }

    

    public function blogsSave(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'title'=>'required|max:150',
            'description'=>'required',
            'imagePath' => 'mimes:jpeg,jpg,png|max:'.$maxSize
        ]);

        $filename = "";
        $file_path = "";
        $todayDate = date("d-m-YHis");
        if ($request->hasFile('imagePath')) {
            $file = Input::file('imagePath');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . '-' . $todayDate . '.' . $extension;
                $destinationPath = 'storage/blogs/';
                $file->move($destinationPath, $filename);
                
                // $file_path = URL::to('') . "/" . $destinationPath . "" . $filename;
                $file_path = $destinationPath . "" . $filename;                
            }
        }

        $data['image_path'] = $file_path;
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['userId'] = Auth::user()->id;
        Blogs::addBlogs($data);

        return redirect()->back()->with('success', 'Blog created successfully');
    }

    public function blogsUpdate(Request $request) {
        $maxSize = 600;
        
        $request->validate([
            'title'=>'required|max:150',
            'description'=>'required',
            'imagePath' => 'mimes:jpeg,jpg,png|max:'.$maxSize
        ]);

        $filename = "";
        $file_path = "";
        $todayDate = date("d-m-YHis");
        if ($request->hasFile('imagePath')) {
            $file = Input::file('imagePath');
            if ($file->isValid()) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999) . '-' . $todayDate . '.' . $extension;
                $destinationPath = 'storage/blogs/';
                $file->move($destinationPath, $filename);
                
                // $file_path = URL::to('') . "/" . $destinationPath . "" . $filename;
                $file_path = $destinationPath . "" . $filename;                
            }
        }

        if ($file_path != "") { 
            $data['image_path'] = $file_path;
        }

        $blogID = $request->get('blogID');
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['updated_by'] = Auth::user()->id;
        Blogs::updateBlogs($blogID, $data);

        return redirect()->back()->with('success', 'Blog updated successfully');
    }
    
    public function blogsDelete($id) {
        $id = $id;
        Blogs::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Blog deleted successfully');
    }
}
