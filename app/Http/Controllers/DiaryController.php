<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function create()
    {
        return view('cabinet');
    }

    public function store(Request $request){
        $diary = Diary::create([
            'height'=> $request->input('height'),
            'weight'=> $request->input('weight'),
            'blood_pressure'=> $request->input('blood_pressure'),
            'glucose_level'=> $request->input('glucose_level'),
            'cholesterol'=> $request->input('cholesterol'),
            'isPrivate'=> $request->input('isPrivate'),
        ]);

        $diary->save();

        return redirect('/cabinet');
    }
}
