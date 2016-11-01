<?php

namespace App\Http\Controllers;

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
}
