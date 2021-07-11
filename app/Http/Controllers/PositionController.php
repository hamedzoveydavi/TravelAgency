<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Requests\PositionRequest;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = Position::all();
        return response()->json(['PositionList'=> $tbl],200);
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
    public function store(PositionRequest $request)
    {
        $tbl = Position::create($request->json()->all());
        return response()->json(['PositionAdd'=> "Saved data Succssefuly!"],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function edit(Position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function update(PositionRequest $request, $id)
    {
        $tbl = Position::find($id);
        $tbl->Position_Name = $request->input('Position_Name');
        if($tbl->update()){
            return response()->json(['PositionUpdate'=> "Update data Succssefuly!"],200);
       }else{
             return response()->json(['PositionUpdate'=>'Cant be Update data'],404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $tbl = Position::find($id);
        if($tbl->delete()){
            return response()->json(['Positiondelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['Positiondelete'=>'Cant be delete Record'],404);
        }

    }
}
