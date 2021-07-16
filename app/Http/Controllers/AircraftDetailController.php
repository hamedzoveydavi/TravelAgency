<?php

namespace App\Http\Controllers;

use App\Models\Aircraft_Detail;
use Illuminate\Http\Request;
use App\Http\Requests\Aircraft_DetailRequest;
use App\Models\Aircraft_Class;
use App\Models\Aircraft_Type;

class AircraftDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tbl = Aircraft_Detail::all();
        return view('layouts.includes.BaseInfo.aircraftdetaillist',['data'=>$tbl]);
        
        //return response()->json(['Aircraft_DetailList'=> $tbl,'classList'=>$AircraftClass->Class_Name,'TypeList'=>$AirCraftType->Type_Name],200);
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
    //Aircraft_DetailRequest
    public function store(Aircraft_DetailRequest $request)
    {
        /*$tbl = Aircraft_Detail::create($request->json()->all());
        return response()->json(['Aircraft_DetailAdd'=> "Saved data Succssefuly!"],200);*/
           

        $tbl = new Aircraft_Detail;
        $tbl->Type_Name = $request->input('Type_Name');
        $tbl->Class_Name = $request->input('Class_Name');
        $tbl->Total_Chair = $request->input('Total_Chair');
       
        if($tbl->save()){
            return back()->with('success','Aircraft Type created successfully!',200);
        }else{
            return back()->with('error','Can not be Save Aircraft Type',404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aircraft_Detail  $aircraft_Detail
     * @return \Illuminate\Http\Response
     */
    public function show(Aircraft_Detail $aircraft_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aircraft_Detail  $aircraft_Detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Aircraft_Detail $aircraft_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aircraft_Detail  $aircraft_Detail
     * @return \Illuminate\Http\Response
     */
    public function update(Aircraft_DetailRequest $request, $id)
    {
        $tbl = Aircraft_Detail::find($id);
        $tbl->Type_Name = $request->input('Type_Name');
        $tbl->Class_Name = $request->input('Class_Name');
        $tbl->Total_Chair = $request->input('Total_Chair');
        if($tbl->update()){
            return response()->json(['Aircraft_DetailUpdate'=> "Update data Succssefuly!"],200);
       }else{
             return response()->json(['Aircraft_DetailUpdate'=>'Cant be Update data'],404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aircraft_Detail  $aircraft_Detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $tbl = Aircraft_Detail::find($id);
        if($tbl->delete()){
            return response()->json(['Aircraft_Detaildelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['Aircraft_Detaildelete'=>'Cant be delete Record'],404);
        }
    }
}
