<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function index()
    {
        // $propertyTypes = PropertyType::all();
        return view('property-types.index');
    }
}
