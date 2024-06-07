<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use Exception;

class AdvertisementController extends Controller
{
    public function index()
    {
        $allAdvertisement = Advertisement::latest()->paginate(10);
        return view('forntEndPage.advertisement.index', compact('allAdvertisement'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'required|image',
        ]);

        try {
            $fileNameImage = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileNameImage = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/advertisement'), $fileNameImage);
            }
            Advertisement::create([
                'title' => $validated['title'],
                'image' => $fileNameImage,
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
        $editBannerValues = Advertisement::findOrFail(decrypt($id));

        return view('ForntEndPage.advertisement.edit', compact('editBannerValues'));
    }
    
    public function update(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|image',
        ]);

        try {
            $banner = Advertisement::findOrFail($request->banner_id);

            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($banner->image) {
                    $oldImagePath = public_path('images/advertisement/' . $banner->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                // Store the new image
                $file = $request->file('image');
                $fileNameImage = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/advertisement'), $fileNameImage);

                // Update the image path in the database
                $banner->image = $fileNameImage;
            }

            // Update the title in the database
            $banner->title = $request->title;
            $banner->save();

            // Flash success message and redirect back
            return back()->with('success', 'Update successful');
        } catch (Exception $exception) {
            session()->flash('error', 'Something went wrong: ' . $exception->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        Advertisement::destroy($request->banner_delete_id);

        return back()->with('success', 'Deleted successfully');
    }

}
