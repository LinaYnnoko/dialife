<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DoctorRegistrationController extends Controller
{
    public function create()
    {
        return view('doctor_registration');
    }

    public function store(Request $request)
    {
               $validated = $request -> validate([
                    'first_name' => ['required', 'string', 'max:50'],
                    'second_name' => ['required', 'string', 'max:50'],
                    'date_of_birthday' => ['required'],
                    'email' => ['required', 'string', 'email'],
                    'password' => ['required', 'string', 'min:7', 'max:50',/* 'confirmed'*/],
                   'certificate' => ['required'],
                    /*'agreement' => ['accepted'],*/
                ]);

        $doctor = Doctor::create([
            'first_name' => $validated['first_name'],
            'second_name' => $validated['second_name'],
            'date_of_birthday' =>  $validated['date_of_birthday'],
            'email' =>  $validated['email'],
            'password' => bcrypt($validated['password']),
            'certificate' => $validated['certificate'],
        ]);

        Auth::login($doctor);

        return redirect('/authorization');

    }

}
