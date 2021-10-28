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
    public function storeChatpage(Request $request)
    {
        $id = Auth::id();

        Message::create([
            'company_id' => 1,
            'text' => $request->chat,
            'student_id' => 1,
            'date' => '',

        ]);
        return view ('chatpage');
    }
}

