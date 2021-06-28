<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Service;
use App\Models\Setting;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\JsonLd;

class HomeController extends Controller
{
    public function Home()
    {
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my home page description');
        JsonLd::addImage('http://localhost/prosmart/public/assetsFront/images/logo/logo.png');
        return view('front.home');
    }

    public function about()
    {
        $about = About::where('status', '1')->first();
        SEOMeta::setTitle($about->metaData);
        SEOMeta::setDescription($about->metaDescription);
        SEOMeta::addKeyword($about->keywords);
        JsonLd::addImage('http://localhost/prosmart/public/'.$about->image_url);
        return view('front.about.index', compact('about'));
    }

    public function service()
    {
        $services = Service::where('status', '1')->get();
        SEOMeta::setTitle('Services');
        SEOMeta::setDescription('This is my services page description');
        JsonLd::addImage('http://localhost/prosmart/public/assetsFront/images/services.jpg');
        return view('front.service.index', compact('services'));
    }

    public function serviceShow($slug)
    {
        $service = Service::whereTranslation('slug', $slug)->firstOrFail();
        SEOMeta::setTitle($service->metaData);
        SEOMeta::setDescription($service->metaDescription);
        SEOMeta::addKeyword($service->keywords);
        JsonLd::addImage('http://localhost/prosmart/public/'.$service->image_url);
        return view('front.service.show', compact('service'));
    }

    public function contact()
    {
        $contact = Setting::where('name', 'ContactUs')->first();
        SEOMeta::setTitle('Contact');
        SEOMeta::setDescription('This is my contact page description');
        JsonLd::addImage('http://localhost/prosmart/public/assetsFront/images/contact-us.jpg');
        return view('front.contact.index', compact('contact'));
    }

}
