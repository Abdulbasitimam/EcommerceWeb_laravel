<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    // Get contact information
    public function getContactInfo()
    {
        return response()->json([
            'email' => 'demo@gmail.com',
            'phone' => '+01 12345678901',
            'address' => 'Gb road 123 London UK',
        ]);
    }

    // Handle contact form submission
    public function submitContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        ContactMessage::create($validatedData);
    
        return response()->json(['success' => true, 'message' => 'Your message has been saved!']);
    }

  
}

