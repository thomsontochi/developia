<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // dd('contact');
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'boolean',
            'branding' => 'boolean',
            'ecommerce' => 'boolean',
            'seo' => 'boolean',
            'message' => 'required|string',
        ]);

        $validated['website'] = $validated['website'] ?? false;
        $validated['branding'] = $validated['branding'] ?? false;
        $validated['ecommerce'] = $validated['ecommerce'] ?? false;
        $validated['seo'] = $validated['seo'] ?? false;

        Contact::create($validated);

        Mail::to('develaustin@gmail.com')->send(new ContactFormMail($validated));


        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
