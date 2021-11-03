<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\offer;
use App\management_list;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    //

    public function showManagement_Page()
    {

        // $gender = $request->input('gender');
        // $univercity = $request->input('univercity');
        // $faculty = $request->input('faculty');
        // $name = $request->input('name');
        // $subject = $request->input('subject');
        $id = Auth::id();
        
        $student = Student::where('id',$id)->first();
        // dd($student);

        Management_list::create([
            'company_id' => $id,
            'student_id' => 1,
            //オファーテーブルにいる学生idに変えないといけない
            'name' => $student->name,
            'univercity' => $student->univercity,
            'faculty' => $student->faculty,
            'subject' => $student->subject,
            'gender' => $student->gender,
        ]);
    
        //  $students = Student::find($id);
        // $max_id = Student::max('id');
        // $student_narrows=array();
        // for($id=1; $id<$max_id+1; $id++){
        //     $offer = Offer::where('student_id',$id)->first();
        //     $student = Student::where('id',$id)->first();

        //     $array = array(
        //         'student_id'=>$student['id'],
        //         'id'=>$offer['id'],
        //     );

      return view ('management_page',['student' => $student,]);
      //見た目の反映のために全て記入
    }
  }
// }

