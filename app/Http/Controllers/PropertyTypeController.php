<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPropertyType;
use App\Models\PropertyType;
use Exception;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function index()
    {
        // $propertyTypes = PropertyType::all();
        return view('property-types.index');
    }


    public function store(RequestPropertyType $request)
    {
        try {
            PropertyType::create([
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
