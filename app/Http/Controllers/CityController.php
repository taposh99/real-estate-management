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

    public function edit($id)
    {
        $editCityValues = City::findOrFail(decrypt($id));
        return view('city.edit', compact('editCityValues'));
    }


    public function update(RequestCity $request)
    {
        $valueUpdate = City::find($request->city_id);

        $updateData = [
            'name' => $request->name,
        ];

        $valueUpdate->update($updateData);

        return back()->with('success', 'Update successfully');
    }
public function destroy(Request $request)
{
    City::destroy($request->city_delete_id);

    return back()->with('success', 'Deleted successfully');
}

}
