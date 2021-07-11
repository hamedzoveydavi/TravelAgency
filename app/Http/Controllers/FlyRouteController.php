<?php

namespace App\Http\Controllers;

use App\Models\FlyRoute;
use Illuminate\Http\Request;
use App\Http\Requests\FlyRouteRequest;

class FlyRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = FlyRoute::paginate(10);
        return response()->json(['FlyRouteList'=> $tbl],200);
        
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
    public function store(FlyRouteRequest $request)
    {
        $tbl = FlyRoute::create($request->json()->all());
        return response()->json(['Aircraft_ClassAdd'=> "Saved data Succssefuly!"],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlyRoute  $flyRoute
     * @return \Illuminate\Http\Response
     */
    public function show(FlyRoute $flyRoute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlyRoute  $flyRoute
     * @return \Illuminate\Http\Response
     */
    public function edit(FlyRoute $flyRoute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlyRoute  $flyRoute
     * @return \Illuminate\Http\Response
     */
    public function update(FlyRouteRequest $request, $id)
    {
        $tbl = FlyRoute::find($id);
        $tbl->SourceFa = $request->input('SourceFa');
        $tbl->SourceEN = $request->input('SourceEN');
        $tbl->Source_Symbol = $request->input('Source_Symbol');
        $tbl->DestinationFa = $request->input('DestinationFa');
        $tbl->DestinationEN = $request->input('DestinationEN');
        $tbl->Destination_Symbol = $request->input('Destination_Symbol');
        if($tbl->update()){
            return response()->json(['FlyRouteUpdate'=> "Update data Succssefuly!"],200);
       }else{
             return response()->json(['FlyRouteUpdate'=>'Cant be Update data'],404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlyRoute  $flyRoute
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlyRoute $flyRoute)
    {
        $tbl = FlyRoute::find($id);
        if($tbl->delete()){
            return response()->json(['FlyRoutedelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['FlyRoutedelete'=>'Cant be delete Record'],404);
        }
    }
}
