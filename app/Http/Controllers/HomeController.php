<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        app('translator')->setLocale($locale);
        return view('home.index');
    }

    public function sitemap()
    { 
        $xml = '<?xml version="1.0" encoding="UTF-8"?>
                <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
                <url>
                    <loc>http://www.rhdevs.us</loc> 
                    <changefreq>monthly</changefreq>
                    <priority>0.9</priority>
                </url>

                <url>
                    <loc>http://www.rhdevs.us/pt/portfolio/ricardo-hofstetter-dias</loc> 
                    <changefreq>monthly</changefreq>
                    <priority>1.0</priority>
                </url>

                <url>
                    <loc>http://www.rhdevs.us/pt/portfolio/roberto-hofstetter-dias</loc> 
                    <changefreq>monthly</changefreq>
                    <priority>1.0</priority>
                </url>

                </urlset>';

        return response($xml, '200')->header('Content-Type', 'text/xml');
    }
}
