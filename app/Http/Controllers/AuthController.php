<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Return a custom login view
    }

    public function login(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            // Find the user by email
            $user = User::where('email', $request->email)->first();

            // Check if the user exists
            if ($user) {
                // Check if the user is an admin
                if ($user->is_admin) {
                    // Attempt login with the provided credentials
                    if (Auth::attempt($request->only('email', 'password'))) {
                        // Log the user in
                        Auth::login($user);

                        // Redirect to the admin dashboard or intended page
                        return redirect()->intended('/admin/set_track')->with('status', 'Admin login successful');
                    }
                } else {
                    return redirect()->back()->with('error', 'Only admins can access this section.');
                }
            }

            // If login fails
            return redirect()->back()->with('error', 'The provided credentials do not match our records.')->onlyInput('email');
        } catch (\Exception $e) {
            // Handle any unexpected errors
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again.');
        }
    }





    public function logout(Request $request)
    {
        Auth::logout(); // Logout the user

        return redirect('admin/login')->with('status', 'Logged out successfully!');
    }
}
