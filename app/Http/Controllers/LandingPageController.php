<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('page.landing_page',[
            'headerColor' => true,
            'landing' => true
        ]);
    }
}
