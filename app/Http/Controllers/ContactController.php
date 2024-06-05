<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:contacts',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
    
        try {
            // Send email notification
            Mail::to('taposh8499@gmail.com')->send(new ContactFormMail($contact));
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            Log::error("Failed to send email: " . $e->getMessage());
            // Redirect back with error message
            return back()->withErrors('Error sending email. Please try again later.');
        }
    }
    
}
