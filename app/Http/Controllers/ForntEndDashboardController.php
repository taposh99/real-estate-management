<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Banner;
use App\Models\Property;
use App\Models\PropertyType;
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
    public function propertyPageSingle($code)
    {
        $property = Property::where('code', $code)->firstOrFail();          
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
        
        if ($request->has('p_type') && $request->input('p_type') != '') {
            $pType = $request->input('p_type');
            $query->whereHas('propertyType', function ($q) use ($pType) {
                $q->where('id', $pType);
            });
        }
        if ($request->has('location_type') && $request->input('location_type') != '') {
            $locationType = $request->input('location_type');
            $query->whereHas('location', function ($q) use ($locationType) {
                $q->where('id', $locationType);
            });
        }
    
        $properties = $query->latest()->get();
        return view('frontend.property.index', compact('properties'));

    }
    
    // public function searchPage()
    // {
    //     $allPropertyType = PropertyType::latest()->get();

    //     return view('frontend.includes.search',compact('allPropertyType'));
    // }

}
