<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Student;
use App\Company;
use Illuminate\Support\Facades\Auth;

class Chat_sendController extends Controller
{
    //
    public function showChat_sendPage()
    {
        $chat = Message::latest()->get();
        return view ('chat_sendpage', ['chat' => $chat]);
    }

    public function storeChat_sendPage(Request $request)
    {
        $id = Auth::id();

        Message::create([
            'company_id' => $id,
            'text' => $request->chat,
            'student_id' => 1,
        ]);
        return back();
    }
}
