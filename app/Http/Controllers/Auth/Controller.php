<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationConfirmation;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Verified;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use App\Mail\EmailVerified;

class SController extends Controller
{
    public function index()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
            ]);

            $verificationToken = Str::random(40); // Generate a random verification token

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'email_verification_token' => $verificationToken, // Assign the verification token to the user
            ]);

            event(new Registered($user));

            $this->sendEmailVerificationNotification($user);

            return redirect()->route('login')->with('success', 'Registration successful! Please check your email for verification instructions.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred during registration. Please try again.')->withInput();
        }
    }

    protected function sendEmailVerificationNotification($user)
    {
        $verificationUrl = route('verification.verify', ['id' => $user->id, 'hash' => sha1($user->email)]);
        Mail::to($user->email)->send(new RegistrationConfirmation($user, $verificationUrl));
    }

    public function verifyEmail(Request $request, $id, $hash)
{
    $user = User::find($id);

    if (!$user || sha1($user->email) !== $hash) {
        return redirect()->route('login')->with('error', 'Invalid verification link.');
    }

    if (!$user->hasVerifiedEmail()) {
        $user->email_verified_at = now();
        $user->save();

        // Send email to confirm successful verification
        Mail::to($user->email)->send(new EmailVerified($user));

        return redirect()->route('login')->with('success', 'Email verified! You can now log in.');
    }

    return redirect()->route('login')->with('error', 'Email has already been verified. Please log in.');
}



public function showVerificationNotice()
{
    return view('auth.verification');
}


}





