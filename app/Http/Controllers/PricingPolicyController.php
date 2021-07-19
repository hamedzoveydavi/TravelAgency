<?php

namespace App\Http\Controllers;

use App\Models\Pricing_policy;
use Illuminate\Http\Request;
use App\Http\Requests\Pricing_policy_Request;


class PricingPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = Pricing_policy::all();
        return view('layouts.includes.BaseInfo.Pricingpolicylist',['data'=>$tbl]);
        //return response()->json(['Pricing_policyList'=> $tbl],200);
        
       
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
    public function store(Pricing_policy_Request $request)
    {
        /*$tbl = Pricing_policy::create($request->json()->all());
        return response()->json(['Pricing_policyAdd'=> "Saved data Succssefuly!"],200);*/
        
        $tbl = new Pricing_policy;
        $tbl->SeatNo_from = $request->input('SeatNo_from');
        $tbl->SeatNo_To = $request->input('SeatNo_To');
        $tbl->Price_Percentage = $request->input('Price_Percentage');
        if($tbl->save()){
            return back()->with('success','Position created successfully!',200);
        }else{
            return back()->with('error','Can not be Save data',404);
        }

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pricing_policy  $pricing_policy
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing_policy $pricing_policy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pricing_policy  $pricing_policy
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing_policy $pricing_policy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pricing_policy  $pricing_policy
     * @return \Illuminate\Http\Response
     */
    public function update(Pricing_policy_Request $request, $id)
    {
        
        $tbl = Pricing_policy::find($id);
        $tbl->SeatNo_from = $request->input('SeatNo_from'); 
        $tbl->SeatNO_TO = $request->input('SeatNO_TO'); 
        $tbl->Price_Percentage = $request->input('Price_Percentage'); 
        if($tbl->update()){
             return response()->json(['Pricing_policyUpdate'=> "Update data Succssefuly!"],200);
        }else{
              return response()->json(['Pricing_policyUpdate'=>'Cant be Update data'],404);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pricing_policy  $pricing_policy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $tbl = Pricing_policy::find($id);
        if($tbl->delete()){
            return response()->json(['Pricing_policydelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['Pricing_policydelete'=>'Cant be delete Record'],404);
        }

    }
}
