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
    public function propertyPageSingle($id)
    {
        $property = Property::findOrFail($id);
          
        return view('frontend.property.singleProperty', compact('property'));
    }
    
    
    public function contactPage()
    {
        return view('frontend.contact.index');
    }

    public function propertyPage(Request $request)
    {
        $query = Property::where('status', 1);

        if ($request->has('filter')) {
            $filter = $request->input('filter');
            if ($filter == 'sale') {
                $query->where('property_purpose', 'For sale');
            } elseif ($filter == 'rent') {
                $query->where('property_purpose', 'For rent');
            } elseif ($filter == 'new_to_old') {
                $query->orderBy('created_at', 'desc');
            }
        }
    
        $properties = $query->latest()->get();
        return view('frontend.property.index', compact('properties'));

    }
   
}
