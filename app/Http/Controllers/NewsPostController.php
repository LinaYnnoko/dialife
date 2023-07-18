<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsPostController extends Controller
{

    public function create()
    {
        return view('post_news');
    }

    public function post(){

        $news = new News;
        return view('news', ['news' => News::all()]);
    }

    public function store(Request $request){
        $news = News::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'image'=> $request->input('image'),
        ]);
        $news->save();

        return redirect('/news');
    }
}
