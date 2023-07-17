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

    public function store(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email','=', $email)->first();

        $validated = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {

            session_start();

            $_SESSION['first_name'] = $user->first_name;
            $_SESSION['second_name'] = $user->second_name;

            return redirect()->route('cabinet');
        }

        return back()
            ->WithInput()
            ->withErrors([
                'email' => 'Почта введена неверно'
            ]);
    }

}
