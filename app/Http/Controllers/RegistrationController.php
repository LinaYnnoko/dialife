<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'second_name' => ['required', 'string', 'max:50'],
            'date_of_birthday' => ['required'],
            'email' => ['required', 'string', 'email'],
            'type_of_diabetes' => ['required'],
            'date_of_illness' => ['required'],
            'password' => ['required', 'string', 'min:7', 'max:50', /*'confirmed'*/],
            /*            'agreement' => ['accepted'],*/
        ]);

        $user = User::create([
            'first_name' => $validated['first_name'],
            'second_name' => $validated['second_name'],
            'date_of_birthday' => $validated['date_of_birthday'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'type_of_diabetes' => $validated['type_of_diabetes'],
            'date_of_illness' => $validated['date_of_illness'],
        ]);

        $user->save();

        Auth::login($user);

        return redirect('/authorization');
    }
}
