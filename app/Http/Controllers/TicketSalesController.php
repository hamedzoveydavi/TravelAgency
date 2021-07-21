<?php

namespace App\Http\Controllers;

use App\Models\TicketSales;
use Illuminate\Http\Request;
use DB;

class TicketSalesController extends Controller
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
                  'airlines.Symbol','fly_routes.Source_Symbol','fly_routes.SourceFa','fly_routes.Destination_Symbol',
                'aircraft__details.Type_Name','aircraft__details.Class_Name','fly_programs.FlyNo',
                 'fly_programs.Price','fly_programs.Chair_avilable','fly_programs.SeatReserve')
        ->get();

        return view('layouts.includes.home',['data'=>$tbl]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketSales  $ticketSales
     * @return \Illuminate\Http\Response
     */
    public function show(TicketSales $ticketSales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketSales  $ticketSales
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketSales $ticketSales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TicketSales  $ticketSales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketSales $ticketSales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketSales  $ticketSales
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketSales $ticketSales)
    {
        //
    }
}
