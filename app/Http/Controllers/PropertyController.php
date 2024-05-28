<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
          
        $citys = City::with('property')->latest()->get();
        $locations = Location::with('property')->latest()->get();
        $propertyTypes = PropertyType::with('property')->latest()->get();

        $properties = Property::where('status', 1)->latest()->paginate(5);

      
        return view('property.index', compact('citys','propertyTypes','locations','properties'));
    }

    public function PropertyPendingindex()
    {
        $pendingPropertyValues = Property::where('status', 0)->latest()->paginate(5);
    
        return view('property.pending', compact('pendingPropertyValues'));
    }
    public function PropertyRejectindex()
    {
        $rejectPropertyValues = Property::where('status', 2)->latest()->paginate(5);
    
        return view('property.reject', compact('rejectPropertyValues'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:0,1,2',
        ]);

        $property = Property::findOrFail($id);
        $property->status = $request->status;
        $property->save();

        return redirect()->back()->with('message', 'Property status updated successfully.');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'title' => 'required|string|max:255',
            'property_type_id' => 'required',
            'city_id' => 'required',
            'location_id' => 'required',
            'property_purpose' => 'required',
            'video_link' => 'nullable|url',
            'image' => 'nullable',
            'owner_name' => 'required|string|max:255',
            'owner_phone' => 'required|string|max:15',
            'owner_email' => 'required|email|max:255',
            'owner_facebook' => 'nullable|url',
            'owner_twitter' => 'nullable|url',
            'owner_linkedin' => 'nullable|url',
            'owner_instagram' => 'nullable|url',
        ]);

       $property = new Property($request->except('image'));

    if ($request->hasFile('image')) {
        $fileNameicon = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/property'), $fileNameicon);
        $property->image = 'images/property/' . $fileNameicon; // Save the correct path to the database
    }

        $property->status = 0; // Default status to pending
        $property->save();

        return redirect()->back()->with('message', 'Property added successfully and is pending approval.');
    }
}
