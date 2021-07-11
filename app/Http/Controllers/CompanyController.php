<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = Company::all();
        return response()->json(['CompanyList'=> $tbl],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        
        $tbl = Company::create($request->json()->all());
        return response()->json(['CompanyAdd'=> "Saved data Succssefuly!"],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        $tbl = Company::find($id);
        $tbl->CompanyName_FA = $request->input('CompanyName_FA'); 
        $tbl->CompanyName_EN = $request->input('CompanyName_EN'); 
        $tbl->ManagerName_FA = $request->input('ManagerName_FA'); 
        $tbl->ManagerName_EN = $request->input('ManagerName_EN'); 
        $tbl->Register_No = $request->input('Register_No'); 
        $tbl->Company_Email = $request->input('Company_Email'); 
        $tbl->Company_Logo = $request->input('Company_Logo'); 
        $tbl->Company_Address = $request->input('Company_Address'); 
        $tbl->Tel = $request->input('Tel'); 
        $tbl->Fax = $request->input('Fax'); 

        if($tbl->update()){
             return response()->json(['CompanyUpdate'=> "Update data Succssefuly!"],200);
        }else{
              return response()->json(['CompanyUpdate'=>'Cant be Update data'],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $tbl = Company::find($id);
        if($tbl->delete()){
            return response()->json(['Companydelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['Companydelete'=>'Cant be delete Record'],404);
        }
    }
}
