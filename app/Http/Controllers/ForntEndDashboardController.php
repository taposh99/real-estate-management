<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Property;
use Illuminate\Http\Request;

class ForntEndDashboardController extends Controller
{
    public function index()
    {
        $allBanner = Banner::latest()->get();
        $properties = Property::where('status', 1)->latest()->get();


        return view('frontend.home.index', compact('allBanner','properties'));
    }
    public function propertyPageSingle()
{
    // Retrieve the property by its ID
    $property = Property::where('status', 1)->firstOrFail();

    return view('frontend.property.singleProperty', compact('property'));
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
