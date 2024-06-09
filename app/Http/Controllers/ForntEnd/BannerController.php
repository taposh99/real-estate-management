<?php

namespace App\Http\Controllers\ForntEnd;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Exception;

class BannerController extends Controller
{
    public function index()
    {
        $allBanner = Banner::latest()->paginate(10);
        return view('forntEndPage.banner.index',compact('allBanner'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string',
            'image' => 'required|image',
        ]);

        try {
            $fileNameImage = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileNameImage = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/banner'), $fileNameImage);
            }
            Banner::create([
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
        $editBannerValues = Banner::findOrFail(decrypt($id));

        return view('ForntEndPage.banner.edit', compact('editBannerValues'));
    }
    
    public function update(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        try {
            $banner = Banner::findOrFail($request->banner_id);

            if ($request->hasFile('image')) {
                // Delete the old image if it exists
                if ($banner->image) {
                    $oldImagePath = public_path('images/banner/' . $banner->image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                // Store the new image
                $file = $request->file('image');
                $fileNameImage = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/banner'), $fileNameImage);

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
        Banner::destroy($request->banner_delete_id);

        return back()->with('success', 'Deleted successfully');
    }
}
