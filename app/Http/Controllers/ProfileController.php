<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function profile()
    {
        $user = auth()->user();
        return view('home.profile', compact('user'));

    }

    public function update(Request $request)
    {
        $user = Auth::user();


        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),

        ]);
        return redirect()->route('home')->with('success', 'Profile updated successfully');
    }

    public function destroy()
    {
        $user = Auth::user();

        if ($user) {
            // Perform any additional checks or conditions before deleting the account if needed.

            // Delete the user account and log them out.
            $user->delete();
            Auth::logout();


            return redirect()->route('home')->with('success', 'Profile deleted successfully');
        }
    }

}
