<?php

namespace App\Http\Controllers;

use App\Models\AgencyDiscount;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\AgencyDiscountRequest;

class AgencyDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = DB::table('agency_discounts')
        ->join('sub_agencies', 'sub_agencies.id', '=', 'agency_discounts.SubAgency_id')
        ->select('agency_discounts.id','sub_agencies.SubAgency_NameFA','agency_discounts.Discount','agency_discounts.Status')
        ->get();

        
        return view('layouts.includes.BaseInfo.AgencyDiscountList',['data'=>$tbl]);
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
    public function store(AgencyDiscountRequest $request)
    {
        $tbl = new AgencyDiscount;
        $tbl->SubAgency_id = $request->input('SubAgency_id');
        $tbl->Discount = $request->input('Discount');
        if($tbl->save()){
            return back()->with('success','Company created successfully!',200);
        }else{
            return back()->with('error','Can not be save this data',404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgencyDiscount  $agencyDiscount
     * @return \Illuminate\Http\Response
     */
    public function show(AgencyDiscount $agencyDiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgencyDiscount  $agencyDiscount
     * @return \Illuminate\Http\Response
     */
    public function edit(AgencyDiscount $agencyDiscount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgencyDiscount  $agencyDiscount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgencyDiscount $agencyDiscount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgencyDiscount  $agencyDiscount
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgencyDiscount $agencyDiscount)
    {
        //
    }
}
