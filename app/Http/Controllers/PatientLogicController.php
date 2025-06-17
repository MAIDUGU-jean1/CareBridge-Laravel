<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PatientProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PatientLogicController extends Controller
{
    public function UpdateProfile(Request $request){
        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:20480',
            'name' => 'required|string|max:255',
            'DOB' => 'nullable|date',
            'blood_group' => 'nullable|string|max:5',
            'email' => 'nullable|email',
            'mobile' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'age' => 'nullable|integer',
            'country' => 'nullable|string|max:100',
        ]);

        $user = Auth::user();

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('profiles', 'public');
        }
        $profile = PatientProfile::updateOrCreate(
            ['user_id' => $user->id],
            [
                'photo' => $photoPath,
                'name' => $request->name,
                'DOB' => $request->date,
                'blood_group' => $request->blood_group,
                'email' => $request->email,
                'mobile' => $request->number,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'age' => $request->age,
                'country' => $request->country,
            ]
        );
        // dd($request->all());
    

        return back()->with('success', 'Profile updated successfully.');
    
    }

    /// update password
    public function UpdatePassword(Request $request){
       $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
         ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

    return back()->with('success', 'Password updated successfully.');
    }

    // patient logout 
    public function Logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/index');
    }
}
