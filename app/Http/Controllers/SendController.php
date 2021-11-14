<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Offerモデルを使う宣言
use App\Offer;
use App\Student;
use App\Company;
use Illuminate\Support\Facades\Auth;
//Auth使いますよって定型文。


class SendController extends Controller
{
    public function storeSendpage(Request $request)
    {
        $id = Auth::id();
        Offer::create([
            'company_id' => $id,
            'text' => $request->offer,
            'student_id' => $request->student_id,
            'date' => date("Y/m/d H:i:s"),

        ]);
        return view ('sendpage');
    }
}
