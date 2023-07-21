<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class UserCabinetController extends Controller
{
    public function doctors()
    {
        $doctors = new Doctor;
        return view('cabinet', ['doctors' => Doctor::all()]);
    }
}
