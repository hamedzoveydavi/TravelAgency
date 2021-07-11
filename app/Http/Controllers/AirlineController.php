<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;


class AirlineController extends Controller
{
    
  /**
     * @OA\Get(
     *      path="/projects",
     *      operationId="getProjectsList",
     *      tags={"Projects"},
     *      summary="Get list of projects",
     *      description="Returns list of projects",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/ProjectResource")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    
    /**
     * Display a listing of the resource.
     *
     * 
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = Airline::all();
       return view('layouts.includes.airline',['data'=>$tbl]);
        //return response()->json(['AirlineList'=> $tbl],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tbl = Airline::create($request->json()->all());
        return response()->json(['AirlineAdd'=> "$tbl.Saved data Succssefuly!"],200);
        }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Airline  $airline
    * @return \Illuminate\Http\Response
    */
   
   public function update(Request $request, $id)
   {
       $tbl = Airline::find($id);
       $tbl->AirlineFA = $request->input('AirlineFA'); 
       $tbl->AirlineEn = $request->input('AirlineEN'); 
       $tbl->Symbol = $request->input('Symbol'); 
       if($tbl->update()){
            return response()->json(['AirlineUpdate'=>$tbl],200);
       }else{
             return response()->json(['AirlineUpdate'=>'Cant be Update Record'],404);
       }
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbl = Airline::find($id);
        if($tbl->delete()){
            return response()->json(['Airlinedelete'=>$tbl],200);
        }else{
            return response()->json(['Airlinedelete'=>'Cant be delete Record'],404);
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airline)
    {
        //
    }

    
    

   
}
