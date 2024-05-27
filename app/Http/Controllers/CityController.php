<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCity;
use App\Models\City;
use Exception;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $allCities = City::latest()->paginate(10);
        return view('city.index',compact('allCities'));
    }

    public function store(RequestCity $request)
    {
        try {
            City::create([
                'name' => $request->name,
            ]);
          toastr()->success('Data has been saved successfully!');
        } catch (Exception $exception) {
            session()->flash('error', 'Something went wrong: ' . $exception->getMessage());
            return redirect()->back();
        }
        return redirect()->back();
    }

}
