<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Company_details;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function showCreatePage()
    {

        return view ('createpage');
     
    }

    public function storeCreatePage(Request $request)
    {
        Company_details::create([
            'address' => $request->address,
            'listing_classification' => $request->listing_classification,
            'place' => $request->place,
            'industry' => $request->industry,
            'type' => $request->type,
            'employees' => $request->employees,
            'manager' => $request->manager,
            'company_id' => Auth::user()->id,
            'name' => $request->name,

        ]);
        
        $company = Auth::user();
        $company_detail = $company->company_details;
        //$companyと$company_detailはcreateの前に置いてしまうと読まれない。

        return view ('createpage',['company' => $company, 'company_detail' => $company_detail]);
    }
    public function editCompletePage($id)
    {
        dd($id);
        $details= Company_details::find($id);
        dd($details);
        
        $company = Auth::user();
        $company_detail = $company->company_details;

        return view ('completepage',['company' => $company, 'company_detail' => $company_detail, 'details' => $details,]);
     
    }

    public function updateCreatePage(Request $request)
    {
        // $company = Company::find($id);
        // dd($company);
        
        $company = Auth::user();
        
        $company_detail = Company_details::find($company->id);

        $company -> name = $request -> name;
        $company_detail -> address = $request -> address;
        $company_detail -> place = $request -> place;
        $company_detail -> industry = $request -> industry;
        $company_detail -> type = $request -> type;
        $company_detail -> employees = $request -> employees;
        $company_detail -> manager = $request -> manager;

        return view ('createpage',['company' => $company, 'company_detail' => $company_detail]);
    }
}