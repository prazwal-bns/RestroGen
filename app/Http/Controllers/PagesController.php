<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index()
    {
        return view('home');
    }
    public function About()
    {
        return view('about');
    }
    public function Contact()
    {
        return view('contact');
    }
    public function Services()
    {
        return view('services');
    }
}
