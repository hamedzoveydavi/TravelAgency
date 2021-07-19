<?php

namespace App\Http\Controllers;

use App\Models\FlyProgram;
use Illuminate\Http\Request;
use App\Http\Requests\FlyProgramRequest;
use DB;

class FlyProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tbl = DB::table('fly_programs')
        ->join('airlines','airlines.id', '=', 'fly_programs.Airlines_id')
        ->join('fly_routes', 'fly_routes.id', '=', 'fly_programs.Route_id')
        ->join('aircraft__details', 'aircraft__details.id', '=', 'fly_programs.AircraftDetail_id')
        ->select('fly_programs.id','fly_programs.FlyType',
                'fly_programs.FlydateFA','fly_programs.FlydateEN',
                  'airlines.Symbol','fly_routes.Source_Symbol','fly_routes.Destination_Symbol',
                'aircraft__details.Type_Name','aircraft__details.Class_Name','fly_programs.FlyNo',
                 'fly_programs.Price','fly_programs.Chair_avilable')
        ->get();

        return view('layouts.includes.BaseInfo.flyProgramlist',['data'=>$tbl]);
        
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
    //
    public function store(FlyProgramRequest $request)
    {
        
        $tbl = new FlyProgram;
        $tbl->FlyType = $request->input('FlyType');
        $tbl->FlydateFA = $request->input('FlydateFA');
        $tbl->FlydateEN = $request->input('FlydateEN');
        $tbl->Airlines_id = $request->input('Airlines_id');
        $tbl->Route_id = $request->input('Route_id');
        $tbl->AircraftDetail_id = $request->input('AircraftDetail_id');
        $tbl->FlyNo = $request->input('FlyNo');
        $tbl->Price = str_replace(',','',$request->input('Price')) ;
        $tbl->luggageRules_id = $request->input('luggageRules_id');
        $tbl->FlyTime_at = $request->input('FlyTime_at');
        $tbl->DepartureTime_at = $request->input('DepartureTime_at');
        $tbl->ArrivalTimeLocal_at = $request->input('ArrivalTimeLocal_at');
        $tbl->Chair_avilable = $request->input('Chair_avilable');
        $tbl->Status = $request->input('Status');
        if($tbl->save()){
            return back()->with('success','Fly Program created successfully!',200);
        }else{
            return back()->with('error','Can not be Save data',404);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlyProgram  $flyProgram
     * @return \Illuminate\Http\Response
     */
    public function show(FlyProgram $flyProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlyProgram  $flyProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(FlyProgram $flyProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlyProgram  $flyProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlyProgram $flyProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlyProgram  $flyProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlyProgram $flyProgram)
    {
        //
    }
}
