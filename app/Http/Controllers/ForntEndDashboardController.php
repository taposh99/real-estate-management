<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Banner;
use App\Models\Property;
use Illuminate\Http\Request;

class ForntEndDashboardController extends Controller
{
    public function index()
    {
        $allBanner = Banner::latest()->get();
        $allAdvertisement = Advertisement::latest()->get();
        $properties = Property::where('status', 1)->latest()->get();


        return view('frontend.home.index', compact('allBanner','properties','allAdvertisement'));
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
    public function aboutPage()
    {
        return view('frontend.aboutus.aboutus');
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
        if ($request->has('city') && $request->input('city') != 'All City') {
            $city = $request->input('city');
            $query->whereHas('city', function ($q) use ($city) {
                $q->where('name', $city);
            });
        }
        
    
        if ($request->has('bedrooms') && $request->input('bedrooms') != 'Any') {
            $bedrooms = $request->input('bedrooms');
            $query->where('bed_room', $bedrooms);
        }
        
        if ($request->has('garages') && $request->input('garages') != 'Any') {
            $garages = $request->input('garages');
            $query->where('garage', $garages);
        }
        
        if ($request->has('bathrooms') && $request->input('bathrooms') != 'Any') {
            $bathrooms = $request->input('bathrooms');
            $query->where('bath_room', $bathrooms);
        }
        
    
    
        $properties = $query->latest()->get();
        return view('frontend.property.index', compact('properties'));

    }
   
}
