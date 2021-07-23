<?php

namespace App\Http\Controllers;

use App\Models\TicketSales;
use Illuminate\Http\Request;
use App\Models\PassengerType;
use App\Models\FlyProgram;

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

    $tbl = DB::table('fly_programs')
    ->join('airlines','airlines.id', '=', 'fly_programs.Airlines_id')
    ->join('fly_routes', 'fly_routes.id', '=', 'fly_programs.Route_id')
    ->join('aircraft__details', 'aircraft__details.id', '=', 'fly_programs.AircraftDetail_id')
    ->where('fly_programs.id',$id)
    ->select('fly_programs.id','fly_programs.FlyType',
            'fly_programs.FlydateFA','fly_programs.FlydateEN','fly_programs.FlyNo','fly_programs.FlyTime_at','fly_programs.DepartureTime_at','fly_programs.ArrivalTimeLocal_at',
            'airlines.Symbol','fly_routes.Source_Symbol','fly_routes.SourceFa','fly_routes.Destination_Symbol','fly_routes.DestinationFa',
            'aircraft__details.Type_Name','aircraft__details.Class_Name','fly_programs.FlyNo',
           'fly_programs.Price AS Price','fly_programs.Chair_avilable','fly_programs.SeatReserve')
    ->first();

    $discount = $this->CalceDiscountPassengerType('ADL',$tbl->Price);

    $agancy =DB::table('users')
    ->join('agency_discounts','users.Service_location','=','agency_discounts.SubAgency_id')
    ->where('users.id',Auth::user()->id)->where('agency_discounts.Status',1)
    ->select('agency_discounts.Discount')
    ->first();
   
    $discountAgancy =(int)$discount - (((int)$discount * (int)$agancy->Discount)/100);
    return view('layouts.includes.PassengerData',['id'=>$id,'data'=>'','list'=>$tbl,'Price'=>$discount,'dagency'=>$discountAgancy]);
  }


  protected function CalceDiscountPassengerType($type,$price){
      
    $discount = PassengerType::where('PassengerType',$type)->first();
    $calce = ((int)$discount->Discount * (int)$price)/100;
    return $calce;
    
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

        $beirthdate_FA = $_POST['y-s'].'-'.$_POST['m-s'].'-'.$_POST['d-s'];
        $beirthdate_EN = $_POST['y-m'].'-'.$_POST['m-m'].'-'.$_POST['d-m'];

        //$maxid = TicketSales::select('id')->max();
        //آیتم بالا درست شود - حلقه تکرار گذاشته شود - مبلغ بلیط - تخفیف اعمال شود - کنترل تاریخ تولد -  تعداد رزرو باید آپدیت شود
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
        $tbl->Dateofbirth_FA = $beirthdate_FA;
        $tbl->Dateofbirth_EN = $beirthdate_EN;
        $tbl->Gender = $request->input('Gender');
        $tbl->Salesusername_id = Auth::user()->id;
        $tbl->Price = str_replace(',','',$request->input('Price'));
        if($tbl->save()){
            $this->update_Seat($request->input('FlyProgram_id'));
            return back()->with('success','Company created successfully!',200);
        }else{
            return back()->with('error','Can not be Save data',400);
        }

    }

protected function update_Seat($id){
    $tbl = FlyProgram::where('id',$id)->first();
    $reserv = TicketSales::where('FlyProgram_id',$id)->whereBetween('PassengerType_id',array('1','2'))->count();
    $tbl->Chair_avilable = $tbl->Chair_avilable - 1 ;
    if($tbl->update()){
        $tbl->SeatReserve = $reserv ;
        $tbl->update();
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
