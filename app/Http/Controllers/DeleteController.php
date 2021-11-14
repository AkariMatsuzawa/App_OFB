<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\Student;
use Illuminate\Support\Facades\Auth;

class DeleteController extends Controller
{
    //

    public function showDeletePage(Request $request)
    {
        $offers = Offer::where('company_id', '=', Auth::id())
          ->where('student_id', '=', $request->student_id)
          ->get();

        return view ('deletepage', ['student_id' => $request->student_id, 'offers'=>$offers]);
    }

    public function destroyDeletePage(Request $request)
    {
        $offer = Offer::find($request->offer_id);
        $offer->delete();

        $student_id = Offer::where('company_id', '=', Auth::id())
          ->get(['student_id']);
        $students = Student::find($student_id);
      
         return view ('management_page',['students' => $students,]);
    }
}