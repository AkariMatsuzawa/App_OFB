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
    public function showChatPage(Request $request)
    {
        // $id = Auth::id();

        // Message::create([
        //     'company_id' => $id,
        //     'text' => $request->chat,
        //     'student_id' => 1,
        // ]);
        // dd(Auth::id());
        $chats = Message::where('company_id', '=', Auth::id())
          ->where('student_id', '=', $request->student_id)
          ->get();
        //   dd($chats);
        //複数のデータを持ってくる＝chats

        // $chat = Message::latest()->get();
        //↑一つのデータを持ってくる、上に新しいデータを置く。一つなので$chat

        // dd($chats);
        return view ('chatpage', ['student_id' => $request->student_id,'chats' => $chats]);
        // return view ('chatpage');
    }

    public function storeChatPage(Request $request)
    {
        $id = Auth::id();

        $validator = $request->validate([
            'chat' => ['required', 'string', 'max:280'],
        ]);

        Message::create([
            'company_id' => $id,
            'text' => $request->chat,
            'student_id' => $request->student_id,
            'date' => date("Y/m/d H:i:s"),
        ]);
        return back();
    }
}

