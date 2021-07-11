<?php

namespace App\Http\Controllers;

use App\Models\Passengerluggage_rules;
use Illuminate\Http\Request;
use App\Http\Requests\Passengerluggage_rulesRequest;

class PassengerluggageRulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = Passengerluggage_rules::paginate(10);
        return response()->json(['Passengerluggage_rulesList'=> $tbl],200);
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
    public function store(Passengerluggage_rulesRequest $request)
    {
       
        $tbl = Passengerluggage_rules::create($request->json()->all());
        return response()->json(['Passengerluggage_rulesAdd'=> "Saved data Succssefuly!"],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Passengerluggage_rules  $passengerluggage_rules
     * @return \Illuminate\Http\Response
     */
    public function show(Passengerluggage_rules $passengerluggage_rules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passengerluggage_rules  $passengerluggage_rules
     * @return \Illuminate\Http\Response
     */
    public function edit(Passengerluggage_rules $passengerluggage_rules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passengerluggage_rules  $passengerluggage_rules
     * @return \Illuminate\Http\Response
     */
    public function update(Passengerluggage_rulesRequest $request, $id)
    {
        $tbl = Passengerluggage_rules::find($id);
        $tbl->NumberOfLuggage = $request->input('NumberOfLuggage');
        $tbl->LuggageWeight = $request->input('LuggageWeight');
        $tbl->NumberOfhandbag = $request->input('NumberOfhandbag');
        $tbl->handbagWeight = $request->input('handbagWeight');
       
        if($tbl->update()){
            return response()->json(['Passengerluggage_rulesUpdate'=> "Update data Succssefuly!"],200);
       }else{
             return response()->json(['Passengerluggage_rulesUpdate'=>'Cant be Update data'],404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passengerluggage_rules  $passengerluggage_rules
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbl = Passengerluggage_rules::find($id);
        if($tbl->delete()){
            return response()->json(['Passengerluggage_rulesdelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['Passengerluggage_rulesdelete'=>'Cant be delete Record'],404);
        }
    }
}
