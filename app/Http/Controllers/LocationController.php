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
        return view('location.index',compact('allLocation','citys'));
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

}
