<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    /**
     * Landing page
     *
     * @return landing page blade
     */
    public function index()
    {
        return view('website.landingPage')->with(["page" => "home"]);
    }

    
    /**
     * About Dr.Ala page
     *
     * @return About Dr.Ala page blade
     */
    public function about()
    {
        return view('website.about')->with(["page" => "about"]);
    }

    
    /**
     * Conditions & Treatments page
     *
     * @return Conditions & Treatments page blade
     */
    public function conditionsAndTreatments()
    {
        return view('website.conditions-and-treatments')->with(["page" => "condTrt"]);
    }

    
    /**
     * Gallery us page
     *
     * @return Gallery us page blade
     */
    public function gallery()
    {
        return view('website.gallery')->with(["page" => "gallery"]);
    }

    
    /**
     * Clinical Images page
     *
     * @return Clinical Images page blade
     */
    public function clinicalImages()
    {
        return view('website.clinical-images')->with(["page" => "clinicalImg"]);
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
}
