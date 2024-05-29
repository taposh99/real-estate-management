<?php

namespace App\Http\Controllers\ForntEnd;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Exception;

class ContactUsController extends Controller
{
    public function index()
    {
        $allContact = ContactUs::latest()->paginate(10);
        return view('ForntEndPage.contact.index', compact('allContact'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string',
            'phone_number' => 'required|string',
            'whatsapp' => 'string',
            'address' => 'required|string',

        ]);

        try {

            ContactUs::create([
                'email' => $validated['email'],
                'phone_number' => $validated['phone_number'],
                'whatsapp' => $validated['whatsapp'],
                'address' => $validated['address'],

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
        $editContactValues = ContactUs::findOrFail(decrypt($id));

        return view('ForntEndPage.contact.edit', compact('editContactValues'));
    }

    public function update(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'email' => 'required|string',
            'phone_number' => 'required|string',
            'whatsapp' => 'string',
            'address' => 'required|string',
        ]);

        try {
            $banner = ContactUs::findOrFail($request->contact_id);

                   $banner->email = $request->email;
                   $banner->phone_number = $request->phone_number;
                   $banner->whatsapp = $request->whatsapp;
                   $banner->address = $request->address;
            $banner->save();

            // Flash success message and redirect back
            return back()->with('success', 'Update successful');
        } catch (Exception $exception) {
            session()->flash('error', 'Something went wrong: ' . $exception->getMessage());
            return redirect()->back();
        }
    }
    
}
