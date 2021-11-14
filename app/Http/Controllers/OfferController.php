<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//Auth使いますよって定型文。
use App\Offer;
use App\Student;
use App\Episode;
use App\Ambition;
use App\image;

class OfferController extends Controller
{
    //
    public function showOfferPage(Request $request, $id)
    //get送信で取ってきた$id
    {
        $student = Student::find($id);
        $episodes = $student->episodes;
        $ambitions = $student->ambitions;

     return view ('offerpage',['student' => $student, 'episodes' => $episodes,'ambitions' => $ambitions,]);
    }

   
}

