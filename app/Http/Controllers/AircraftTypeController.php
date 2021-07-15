<?php

namespace App\Http\Controllers;

use App\Models\Aircraft_Type;
use Illuminate\Http\Request;
use App\Http\Requests\AircraftTypeRequest;

class AircraftTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = Aircraft_Type::all();
        return view('layouts.includes.BaseInfo.aircraftlist',['data'=>$tbl]);
        //return response()->json(['AirlineList'=> $tbl],200);
        
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
    public function store(AircraftTypeRequest $request)
    {
        /*$tbl = Aircraft_Type::create($request->json()->all());
        return response()->json(['AircraftTypeyAdd'=> "Saved data Succssefuly!"],200);*/

        $tbl = new Aircraft_Type;
        $tbl->Type_Name = $request->input('Type_Name');
        if($tbl->save()){
            return back()->with('success','Aircraft Type created successfully!',200);
        }else{
            return back()->with('eroor','Can Not Be Saved data!',404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aircraft_Type  $aircraft_Type
     * @return \Illuminate\Http\Response
     */
    public function show(AircraftTypeRequest $aircraft_Type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aircraft_Type  $aircraft_Type
     * @return \Illuminate\Http\Response
     */
    public function edit(Aircraft_Type $aircraft_Type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aircraft_Type  $aircraft_Type
     * @return \Illuminate\Http\Response
     */
    public function update(AircraftTypeRequest $request, $id)
    {
        $tbl = Aircraft_Type::find($id);
        $tbl->Type_Name = $request->input('Type_Name');
        if($tbl->update()){
            return response()->json(['AircraftTypeUpdate'=> "Update data Succssefuly!"],200);
       }else{
             return response()->json(['AircraftTypeUpdate'=>'Cant be Update data'],404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aircraft_Type  $aircraft_Type
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbl = Aircraft_Type::find($id);
        if($tbl->delete()){
            return response()->json(['AircraftTypedelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['AircraftTypedelete'=>'Cant be delete Record'],404);
        }
    }
}
