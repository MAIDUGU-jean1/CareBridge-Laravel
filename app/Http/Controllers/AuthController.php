<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

   public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type'           => 'required|in:doctor,patient,admin',
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|unique:users,email',
            'number'         => 'nullable|string|max:20',
            'password'       => 'required|string|min:6|confirmed',
            'specialization' => 'nullable|required_if:type,doctor|string',
            'experience'     => 'nullable|required_if:type,doctor|integer|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'type'           => $request->type,
            'name'           => $request->name,
            'email'          => $request->email,
            'number'         => $request->number,
            'password'       => Hash::make($request->password),
            'specialization' => $request->type === 'doctor' ? $request->specialization : null,
            'experience'     => $request->type === 'doctor' ? $request->experience : null,
        ]);
        //  dd($user);
        // Optionally login user
        // auth()->login($user);

        return redirect()->route('dashboard')->with('success', 'Registration successful');
    }

   public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Optional: Redirect based on role
            $user = Auth::user();
            if ($user->type === 'doctor') {
                return redirect()->route('doctor.dashboard');
            } elseif ($user->type === 'patient') {
                return redirect()->route('Dashboard.Show');
            } else {
                return redirect()->route('home');
            }
        }

        return back()->with('error', 'Invalid email or password.')->withInput();
    }
    //
}
