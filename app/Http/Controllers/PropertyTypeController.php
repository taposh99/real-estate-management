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
        $propertyTypes = PropertyType::all();
        return view('property-types.index',compact('propertyTypes'));
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


public function destroy(Request $request)
{
    PropertyType::destroy($request->corporate_delete_id);

    return back()->with('success', 'Deleted successfully');
}
}
