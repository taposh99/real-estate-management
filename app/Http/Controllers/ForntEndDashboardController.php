<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class ForntEndDashboardController extends Controller
{
    public function index()
    {
        $allBanner = Banner::latest()->get();
        return view('frontend.home.index', compact('allBanner'));
    }
    public function contactPage()
    {
        return view('frontend.contact.index');
    }
    public function propertyPage()
    {
        return view('frontend.property.index');
    }
}
