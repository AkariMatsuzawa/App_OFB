<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Student;
use App\Company;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //
    public function showChatPage()
    {
        // $id = Auth::id();

        // Message::create([
        //     'company_id' => $id,
        //     'text' => $request->chat,
        //     'student_id' => 1,
        // ]);
        $chats = Message::latest()->get();
        // dd($chat);
        return view ('chatpage', ['chats' => $chats]);
        // return view ('chatpage');
    }

    public function storeChatPage(Request $request)
    {
        $id = Auth::id();
        // $chat = Message::latest()->get();

        $validator = $request->validate([
            'chat' => ['required', 'string', 'max:280'],
        ]);

        Message::create([
            'company_id' => $id,
            'text' => $request->chat,
            'student_id' => 1,
        ]);
        return back();
    }
}

