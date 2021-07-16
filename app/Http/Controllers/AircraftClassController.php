<?php

namespace App\Http\Controllers;

use App\Models\Aircraft_Class;
use Illuminate\Http\Request;
use App\Http\Requests\Aircraft_ClassRequest;

class AircraftClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = Aircraft_Class::all();
        return view('layouts.includes.BaseInfo.aircraftClassList',['data'=>$tbl]);
         //return response()->json(['Aircraft_ClassList'=> $tbl],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Aircraft_ClassRequest $request)
    {
        /*$tbl = Aircraft_Class::create($request->json()->all());
        return response()->json(['Aircraft_ClassAdd'=> "Saved data Succssefuly!"],200);*/

        $tbl = new Aircraft_Class;
        $tbl->Class_Name = $request->input('Class_Name');
        $tbl->Class_Symbol = $request->input('Class_Symbol');
        if($tbl->save()){
            return back()->with('success','Saved Class successfully!',200);
        }else{
            return back()->with('error','Can not be save Class',404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aircraft_Class  $aircraft_Class
     * @return \Illuminate\Http\Response
     */
    public function show(Aircraft_Class $aircraft_Class)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aircraft_Class  $aircraft_Class
     * @return \Illuminate\Http\Response
     */
    public function edit(Aircraft_Class $aircraft_Class)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aircraft_Class  $aircraft_Class
     * @return \Illuminate\Http\Response
     */
    public function update(Aircraft_ClassRequest $request, $id)
    {
        $tbl = Aircraft_Class::find($id);
        $tbl->Type_Name = $request->input('Class_Name');
        if($tbl->update()){
            return response()->json(['Aircraft_ClassUpdate'=> "Update data Succssefuly!"],200);
       }else{
             return response()->json(['Aircraft_ClassUpdate'=>'Cant be Update data'],404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aircraft_Class  $aircraft_Class
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbl = Aircraft_Class::find($id);
        if($tbl->delete()){
            return response()->json(['Aircraft_Classdelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['Aircraft_Classdelete'=>'Cant be delete Record'],404);
        }
    }
}
