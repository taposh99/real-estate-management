<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestLocation;
use App\Models\City;
use App\Models\Location;
use Illuminate\Http\Request;
use Exception;

class LocationController extends Controller
{
    public function index()
    {

        $citys = City::with('location')->latest()->get();
        $allLocation = Location::latest()->paginate(10);
        return view('location.index', compact('allLocation', 'citys'));
    }

    public function store(RequestLocation $request)
    {
        try {
            Location::create([
                'name' => $request->name,
                'city_id' => $request->city_id,
            ]);
            toastr()->success('Data has been saved successfully!');
        } catch (Exception $exception) {
            session()->flash('error', 'Something went wrong: ' . $exception->getMessage());
            return redirect()->back();
        }
        return redirect()->back();
    }

  

    public function edit($id)
    {
        $editLocationValues = Location::findOrFail(decrypt($id));
        $cities = City::all(); // Assuming you have a City model

        return view('location.edit', compact('editLocationValues', 'cities'));
    }



    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city_id' => 'required|integer|exists:cities,id',
        ]);

        try {
            $location = Location::findOrFail($request->location_id);
            $location->update([
                'name' => $request->name,
                'city_id' => $request->city_id,
            ]);

            return back()->with('success', 'Update successfully');
        } catch (Exception $exception) {
            return back()->with('error', 'Something went wrong: ' . $exception->getMessage());
        }
    }

    public function destroy(Request $request)
    {
        Location::destroy($request->Location_delete_id);

        return back()->with('success', 'Deleted successfully');
    }
}
