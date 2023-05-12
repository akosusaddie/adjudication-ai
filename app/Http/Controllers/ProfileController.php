<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.user-profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'about' => 'nullable',
            'company' => 'nullable',
            'job' => 'nullable',
            'country' => 'nullable',
            'address' => 'nullable',
            'phone' => 'nullable',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the user's profile information
        $user->name = $validatedData['name'];
        $user->about = $validatedData['about'];
        $user->company = $validatedData['company'];
        $user->job = $validatedData['job'];
        $user->country = $validatedData['country'];
        $user->address = $validatedData['address'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];

         // Handle profile image upload
    if ($request->hasFile('profile_image')) {
        $profileImage = $request->file('profile_image');
        $originalName = $profileImage->getClientOriginalName(); // Get the original name of the file
        $imagePath = $profileImage->storeAs('public/uploads', $originalName); // Save the file with the original name

        // Delete the old profile image if it exists
        if ($user->profile_image) {
            Storage::delete('public/uploads/' . $user->profile_image);
        }

        $user->profile_image = $originalName; // Store the original name in the database
    }

    $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }


    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
            'renew_password' => 'required|same:new_password',
        ]);

        // Verify the current password
        if (!Hash::check($validatedData['current_password'], $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password
        $user->password = Hash::make($validatedData['new_password']);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully.');
    }
}
