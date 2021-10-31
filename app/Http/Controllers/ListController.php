<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Episode;
use App\Ambition;
use App\image;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\MockObject\Builder\Stub;

class ListController extends Controller
{
    //
    public function showListPage(Request $request, $id)
    {
         
         $student = Student::find($id);
         $episodes = $student->episodes;
         //一人の学生が複数のエピソードを持てる。一番右のepisodesはstudentモデルのhasmanyで持っているepisodeのこと。

        //  dd($episodes);
        //  dd($student);
         $ambitions = $student->ambitions;
         //episodeと同じく。

      return view ('listpage',['student' => $student, 'episodes' => $episodes,'ambitions' => $ambitions,]);
      //見た目の反映のために全て記入
    }
}

