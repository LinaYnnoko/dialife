<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Http\Requests\MessageFormReqest;
use App\Models\Message;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('/cabinet');
    }

    public function messages()
    {
        return Message::query()
            ->with('user')
            ->get();
    }

    public function send(MessageFormReqest $request)
    {
        $message = Message::create([
            'user_id'=> '1012',
            'message'=>$request->input('message')
        ]);

        return $message;
    }

}
