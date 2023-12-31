<?php

namespace App\Http\Controllers;

use App\Models\User;
use Couchbase\View;


use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthorizationController extends Controller
{
    public function create()
    {
        return view('authorization');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $email = $request->input('email');
        $user = User::where('email','=', $email)->first();

        $validated = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {

            session_start();
            $_SESSION['status'] = $user;
            $_SESSION['user_id'] = $user->id;
            $_SESSION['first_name'] = $user->first_name;
            $_SESSION['second_name'] = $user->second_name;
            $_SESSION['email'] = $user->email;
            $_SESSION['geolocation'] = $user->geolocation;
            $_SESSION['date_of_birthday'] = $user->date_of_birthday;
            $_SESSION['type_of_diabetes'] = $user->type_of_diabetes;
            $_SESSION['date_of_illness'] = $user->date_of_illness;
            $_SESSION['avatar'] = $user->avatar;

            return redirect()->route('cabinet');
        }

        return back()
            ->WithInput()
            ->withErrors([
                'email' => 'Такой почты нет'
            ]);
    }
    public function destroy(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();

        $request = session()->invalidate();

        return redirect()->route('welcome');
    }
}
