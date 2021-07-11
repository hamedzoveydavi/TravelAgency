<?php

namespace App\Http\Controllers;


use App\Models\Refund_rules;
use Illuminate\Http\Request;
use App\Http\Requests\Refund_rulesRequest;

class RefundRulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = Refund_rules::all();
        return response()->json(['Refund_rulesList'=> $tbl],200);
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
    public function store(Refund_rulesRequest $request)
    {
        $tbl = Refund_rules::create($request->json()->all());
        return response()->json(['Refund_rulesAdd'=> "Saved data Succssefuly!"],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refund_rules  $refund_rules
     * @return \Illuminate\Http\Response
     */
    public function show(Refund_rules $refund_rules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Refund_rules  $refund_rules
     * @return \Illuminate\Http\Response
     */
    public function edit(Refund_rules $refund_rules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Refund_rules  $refund_rules
     * @return \Illuminate\Http\Response
     */
    public function update(Refund_rulesRequest $request,$id)
    {
        $tbl = Refund_rules::find($id);
        $tbl->PassengerType = $request->input('PassengerType'); 
        $tbl->PeriodOfTime = $request->input('PeriodOfTime'); 
        $tbl->TypeOfTime = $request->input('TypeOfTime'); 
        $tbl->Penalty = $request->input('Penalty'); 
       
        if($tbl->update()){
             return response()->json(['Refund_rulesUpdate'=> "Update data Succssefuly!"],200);
        }else{
              return response()->json(['Refund_rulesUpdate'=>'Cant be Update data'],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refund_rules  $refund_rules
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbl = Refund_rules::find($id);
        if($tbl->delete()){
            return response()->json(['Refund_rulesdelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['Refund_rulesdelete'=>'Cant be delete Record'],404);
        }
    }
}
