<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Exception;

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

    public function edit($id)
    {
        $editPropertyValues = Property::findOrFail(decrypt($id));
        $cities = City::all(); 
        $locations = Location::all(); 
        $propertyTyp = PropertyType::all(); 
    
        return view('property.edit', compact('editPropertyValues', 'cities', 'locations', 'propertyTyp'));
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
            'land_area' => 'required|string',
            'appartment_size' => 'required|string',
            'bed_room' => 'required|integer',
            'bath_room' => 'required|integer',
            'drawing_room' => 'required|integer',
            'dining_room' => 'required|integer',
            'garage' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string',
        ]);

       $property = new Property($request->except('image'));

    if ($request->hasFile('image')) {
        $fileNameicon = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/property'), $fileNameicon);
        $property->image = 'images/property/' . $fileNameicon; // Save the correct path to the database
    }

        $property->status = 0; // Default status to pending
        $property->save();

        return back()->with('message', 'Property added successfully and is pending approval.');
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'property_type_id' => 'required|integer|exists:property_types,id',
            'city_id' => 'required|integer|exists:cities,id',
            'location_id' => 'required|integer|exists:locations,id',
            'property_purpose' => 'required|string',
            'video_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,jpg|max:2048',
            'owner_name' => 'required|string|max:255',
            'owner_phone' => 'required|string|max:15',
            'owner_email' => 'required|email|max:255',
            'owner_facebook' => 'nullable|url',
            'owner_twitter' => 'nullable|url',
            'owner_linkedin' => 'nullable|url',
            'owner_instagram' => 'nullable|url',
        ]);
    
        try {
            $property = Property::findOrFail($request->property_id);
    
            $updateData = [
                'title' => $request->title,
                'property_type_id' => $request->property_type_id,
                'city_id' => $request->city_id,
                'location_id' => $request->location_id,
                'property_purpose' => $request->property_purpose,
                'video_link' => $request->video_link,
                'owner_name' => $request->owner_name,
                'owner_phone' => $request->owner_phone,
                'owner_email' => $request->owner_email,
                'owner_facebook' => $request->owner_facebook,
                'owner_twitter' => $request->owner_twitter,
                'owner_linkedin' => $request->owner_linkedin,
                'owner_instagram' => $request->owner_instagram,
            ];
    
            if ($request->hasFile('image')) {
                $fileNameicon = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/property'), $fileNameicon);
                $updateData['image'] = 'images/property/' . $fileNameicon;
            }
    
            $property->update($updateData);
    
            return back()->with('success', 'Update successfully');
        } catch (Exception $exception) {
            return back()->with('error', 'Something went wrong: ' . $exception->getMessage());
        }
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

  
}
