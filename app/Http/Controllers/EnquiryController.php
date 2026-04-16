<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        // ✅ Validation
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'institute' => 'required',
            'postal_code' => 'required',
        ]);

        // ✅ Email Send
        Mail::send([], [], function ($message) use ($data) {
            $message->to('waqas.yaqoob@kbmgroup.co.uk')
                ->subject('New Enquiry - AIRP Programme')
                ->text(
                    "New Enquiry Received:\n\n" .
                    "Name: {$data['name']}\n" .
                    "Email: {$data['email']}\n" .
                    "Phone: {$data['phone']}\n" .
                    "Institute: {$data['institute']}\n" .
                    "Postal Code: {$data['postal_code']}"
                );
        });

        // ✅ Redirect with success message
        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');
    }
}