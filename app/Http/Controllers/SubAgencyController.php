<?php

namespace App\Http\Controllers;

use App\Models\SubAgency;
use Illuminate\Http\Request;
use App\Http\Requests\SubAgencyRequest;

class SubAgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = SubAgency::all();
        return response()->json(['SubAgencyList'=> $tbl],200);
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
    public function store(SubAgencyRequest $request)
    {
        $tbl = SubAgency::create($request->json()->all());
        return response()->json(['SubAgencyAdd'=> "Saved data Succssefuly!"],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubAgency  $subAgency
     * @return \Illuminate\Http\Response
     */
    public function show(SubAgency $subAgency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubAgency  $subAgency
     * @return \Illuminate\Http\Response
     */
    public function edit(SubAgency $subAgency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubAgency  $subAgency
     * @return \Illuminate\Http\Response
     */
    public function update(SubAgencyRequest $request, $id)
    {
        $tbl = SubAgency::find($id);
        $tbl->SubAgency_NameFA = $request->input('SubAgency_NameFA'); 
        $tbl->SubAgency_NameEN= $request->input('SubAgency_NameEN'); 
        $tbl->SubAgency_ManagerNameFA= $request->input('SubAgency_ManagerNameFA'); 
        $tbl->SubAgency_ManagerNameEN= $request->input('SubAgency_ManagerNameEN'); 
        $tbl->SubAgency_RegisterNo= $request->input('SubAgency_RegisterNo'); 
        $tbl->SubAgency_Email= $request->input('SubAgency_Email'); 
        $tbl->SubAgency_Address = $request->input('SubAgency_Address'); 
        $tbl->SubAgency_Logo= $request->input('SubAgency_Logo'); 
        $tbl->SubAgency_Tel=   $request->input('SubAgency_Tel'); 
        $tbl->SubAgency_Fax=   $request->input('SubAgency_Fax'); 
        if($tbl->update()){
            return response()->json(['SubAgencyUpdate'=> "Update data Succssefuly!"],200);
       }else{
             return response()->json(['SubAgencyUpdate'=>'Cant be Update data'],404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubAgency  $subAgency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbl = SubAgency::find($id);
        if($tbl->delete()){
            return response()->json(['SubAgencydelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['SubAgencydelete'=>'Cant be delete Record'],404);
        }
    }
}
