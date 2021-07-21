<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $tbl = DB::table('fly_programs')
        ->join('airlines','airlines.id', '=', 'fly_programs.Airlines_id')
        ->join('fly_routes', 'fly_routes.id', '=', 'fly_programs.Route_id')
        ->join('aircraft__details', 'aircraft__details.id', '=', 'fly_programs.AircraftDetail_id')
        ->select('fly_programs.id','fly_programs.FlyType',
                'fly_programs.FlydateFA','fly_programs.FlydateEN','fly_programs.FlyNo','fly_programs.FlyTime_at','fly_programs.DepartureTime_at','fly_programs.ArrivalTimeLocal_at',
                'airlines.Symbol','fly_routes.Source_Symbol','fly_routes.SourceFa','fly_routes.Destination_Symbol','fly_routes.DestinationFa',
                'aircraft__details.Type_Name','aircraft__details.Class_Name','fly_programs.FlyNo',
                 'fly_programs.Price','fly_programs.Chair_avilable','fly_programs.SeatReserve')
        ->get();

       return view('home',['data'=>$tbl]);

      // return view('layouts.adminpanel');
    }
}
