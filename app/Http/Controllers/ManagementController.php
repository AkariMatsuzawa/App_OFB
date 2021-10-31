<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    //
    public function showManagement_Page(Request $request)
    {

        $offer_id = $request->input('offer_id');

        $query = Student::query();

        //オファーidで検索する
        $query->when($offer_id, function($query,$offer_id){
            return $query->where('offer_id', $offer_id);
        });

        $id = Auth::id();
        //Authは認証機能（Authorizeの略）

        Student::create([
            'company_id' => $id,
            'text' => $request->offer,
            'student_id' => 1,

        ]);

        return $query->get();
    }
}
