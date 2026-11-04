<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the Landing Home / Index page.
     */
    public function index()
    {
        return view('landing.index');
    }

    /**
     * Display the About Us page.
     */
    public function about()
    {
        return view('landing.about');
    }

    /**
     * Display the Products page.
     */
    public function products()
    {
        return view('landing.products');
    }

    /**
     * Display the Checkout page.
     */
    public function checkout()
    {
        return view('landing.checkout');
    }

    /**
     * Display the Testimonials page.
     */
    public function testimonials()
    {
        return view('landing.testimonials');
    }

    /**
     * Display the Blog page.
     */
    public function blog()
    {
        return view('landing.blog');
    }
}