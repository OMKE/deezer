<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        return view('landing.index');
    }
    public function plans()
    {
        return view('landing.plans');
    }
    public function download()
    {
        return view('landing.download');
    }
}
