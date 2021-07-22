<?php

namespace App\Http\Controllers;

use App\Models\TicketSales;
use Illuminate\Http\Request;
//use Illuminate\Http\Request\ticketsalesRequest;
use DB;
use App\Models\FlyRoute;
use Auth;



class TicketSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$tbl = DB::table('fly_programs')
        ->join('airlines','airlines.id', '=', 'fly_programs.Airlines_id')
        ->join('fly_routes', 'fly_routes.id', '=', 'fly_programs.Route_id')
        ->join('aircraft__details', 'aircraft__details.id', '=', 'fly_programs.AircraftDetail_id')
        ->select('fly_programs.id','fly_programs.FlyType',
                'fly_programs.FlydateFA','fly_programs.FlydateEN',
                  'airlines.Symbol','fly_routes.Source_Symbol','fly_routes.SourceFa','fly_routes.Destination_Symbol',
                'aircraft__details.Type_Name','aircraft__details.Class_Name','fly_programs.FlyNo',
                 'fly_programs.Price','fly_programs.Chair_avilable','fly_programs.SeatReserve')
        ->get();*/

        return view('layouts.includes.SearchFlight',['data'=>'']);
        }

    public function Searchfly()
    {
       
        if(!empty($_POST['date'])){

            $date = $_POST['date'];
            $sc = $_POST['Source'];
            $st = $_POST['Distination'];
            $route = FlyRoute::where('Source_Symbol',$sc)->where('Destination_Symbol',$st)->first();
           
if(!empty($route->id)){
                    
    $tbl = DB::table('fly_programs')
        ->join('airlines','airlines.id', '=', 'fly_programs.Airlines_id')
        ->join('fly_routes', 'fly_routes.id', '=', 'fly_programs.Route_id')
        ->join('aircraft__details', 'aircraft__details.id', '=', 'fly_programs.AircraftDetail_id')
        ->where('fly_programs.FlydateEN',$date)->where('fly_programs.Route_id',$route->id)->where('fly_programs.Status',1)
        ->select('fly_programs.id','fly_programs.FlyType',
                'fly_programs.FlydateFA','fly_programs.FlydateEN','fly_programs.FlyNo','fly_programs.FlyTime_at','fly_programs.DepartureTime_at','fly_programs.ArrivalTimeLocal_at',
                'airlines.Symbol','fly_routes.Source_Symbol','fly_routes.SourceFa','fly_routes.Destination_Symbol','fly_routes.DestinationFa',
                'aircraft__details.Type_Name','aircraft__details.Class_Name','fly_programs.FlyNo',
                 'fly_programs.Price','fly_programs.Chair_avilable','fly_programs.SeatReserve')
        ->get();

        return view('layouts.includes.SearchFlight',['data'=>$tbl,'routid'=>$route->id]);

    }else{
        return view('layouts.includes.SearchFlight',['message'=>'توجه, پرواز مورد نظر یافت نشد!']);
         }

        }else{
            return view('layouts.includes.SearchFlight',['data'=>'']);

        }
   
    }

  public function SelectFly(){
    $id = $_GET['id'];
    return view('layouts.includes.PassengerData',['id'=>$id,'data'=>'']);
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
        //$maxid = TicketSales::select('id')->max();
        //آیتم بالا درست شود - حلقه تکرار گذاشته شود - مبلغ بلیط - تخفیف اعمال شود - کنترل تاریخ تولد - کنار هم گذاشتن تاریخ ها 
        $tbl = new TicketSales;
        $tbl->FlyProgram_id = $request->input('FlyProgram_id');
        $tbl->ref ='123456';  //($maxid + 1000).'SAMT';
        $tbl->PassengerType_id = $request->input('PassengerType_id');
        $tbl->Name = $request->input('Name');
        $tbl->Family = $request->input('Family');
        $tbl->Nationality = $request->input('Nationality');
        $tbl->National_Code = $request->input('National_Code');
        $tbl->Passport_No = $request->input('Passport_No');
        $tbl->Passport_ExpireDate = $request->input('Passport_ExpireDate');
        $tbl->Dateofbirth_FA = $request->input('Dateofbirth_FA');
        $tbl->Dateofbirth_EN = $request->input('Dateofbirth_EN');
        $tbl->Gender = $request->input('Gender');
        $tbl->Salesusername_id = Auth::user()->id;
        if($tbl->save()){
            return back()->with('success','Company created successfully!',200);
        }else{
            return back()->with('error','Can not be Save data',400);
        }

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
