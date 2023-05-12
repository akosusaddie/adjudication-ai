<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function store(Request $request)
    {
        $appointment = Inquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'attended_to' => false,
            'response_identifier' => uniqid()
        ]);

        Mail::send('emails.contact', ['appointment' => $appointment], function ($message) use ($appointment) {
            $message->from($appointment->email, $appointment->name);
            $message->to('sobobay20@gmail.com');
            $message->subject('Appointment/Enquiry Request Mail');
        });

        return redirect(url('/#contact'))->with('success', 'Inquiry/Request sent successfully!');
    }

    public function display($id)
    {
        $appointment = Inquiry::find($id);

        if ($appointment !== null) {
            return view('emails.contact', ['appointment' => $appointment]);
        } else {
            return back()->with('error', 'Appointment not found!');
        }
    }


}
