<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $home           = route('home');
        $about          = route('about');
        $services        = route('services');
        $contact        = route('contact');

    	return response()->view('sitemap.index',[
            'home'          => $home,
            'about'         => $about,
            'services'      => $services,
            'contact'       => $contact,
    	])->header('Content-Type', 'text/xml');
    }

    public function home()
    {
        $home  = route('home');
        return response()->view('sitemap.home', [
            'home' => $home,
        ])->header('Content-Type', 'text/xml');
    }
    
    public function about()
    {
        $about  = route('about');
        return response()->view('sitemap.about', [
            'about' => $about,
        ])->header('Content-Type', 'text/xml');
    }

    public function services()
    {
        $services = route('services');
        return response()->view('sitemap.services', [
            'services' => $services,
        ])->header('Content-Type', 'text/xml');
    }
    
    public function contact()
    {
        $contact  = route('contact');
        return response()->view('sitemap.contact', [
            ' contact' => $contact,
        ])->header('Content-Type', 'text/xml');
    }

}
