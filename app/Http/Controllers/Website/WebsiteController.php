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
        return view('website.landingPage');
    }

    
    /**
     * About Dr.Ala page
     *
     * @return About Dr.Ala page blade
     */
    public function about()
    {
        return view('website.about');
    }

    
    /**
     * Conditions & Treatments page
     *
     * @return Conditions & Treatments page blade
     */
    public function conditionsAndTreatments()
    {
        return view('website.conditions-and-treatments');
    }

    
    /**
     * Gallery us page
     *
     * @return Gallery us page blade
     */
    public function gallery()
    {
        return view('website.gallery');
    }

    
    /**
     * Contact us page
     *
     * @return Contact us page blade
     */
    public function contact()
    {
        return view('website.contact');
    }
}
