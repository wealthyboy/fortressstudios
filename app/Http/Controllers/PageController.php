<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $pageTitle = 'Fortress Studios - Leading Film Production in Lagos';
        $pageName = 'Home';
        $pageMetaDescription = 'Welcome to Fortress Studios, your premier destination for professional film production services in Lagos. Discover our expertise in film, TV commercials, and more.';
        $gallery = Gallery::with(['media'])->where('location', 'home')->get();
        return view('welcome', [
        
            'gallery' => $gallery,
            'pageTitle' => $pageTitle,
            'pageName' => $pageName,
            'pageMetaDescription' => $pageMetaDescription,
        ]);
    }
    public function about()
    {
        $pageTitle = 'About Fortress Studios - Excellence in Film Production';
        $pageName = 'About';
        $pageMetaDescription = 'Learn about Fortress Studios, our mission, vision, and the talented team behind our award-winning film production services. Discover why we are leaders in the industry.';
        
        $staffs = Team::with(['media'])->where('status', true)->get();
        return view('pages.about', [
            'pageTitle' => $pageTitle,
            'pageName' => $pageName,
            'pageMetaDescription' => $pageMetaDescription,
            'staffs' => $staffs,

        ]);
    }
    public function services()
    {
        $pageTitle = 'Our Services - Professional Film Production by Fortress Studios';
        $pageName = 'Services';
        $pageMetaDescription = 'Explore the range of professional services offered by Fortress Studios, including film production, TV commercials, equipment rental, talent management, event coverage, and documentary production.';
        
        return view('pages.services', [
            'pageTitle' => $pageTitle,
            'pageName' => $pageName,
            'pageMetaDescription' => $pageMetaDescription,
        ]);
    }
    public function contact()
    {
        $pageTitle = 'Contact Fortress Studios - Get in Touch with Us';
        $pageName = 'Contact Us';
        $pageMetaDescription = 'Contact Fortress Studios for all your film production needs. Get in touch with our team to discuss your project and discover how we can bring your vision to life.';
        
        return view('pages.contact', [
            'pageTitle' => $pageTitle,
            'pageName' => $pageName,
            'pageMetaDescription' => $pageMetaDescription,
        ]);
    }
}
