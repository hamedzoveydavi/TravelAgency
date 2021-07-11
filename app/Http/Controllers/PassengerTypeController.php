<?php

namespace App\Http\Controllers;

use App\Models\PassengerType;
use Illuminate\Http\Request;
use App\Http\Requests\PassengerTypeRequest;

class PassengerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbl = PassengerType::paginate(10);
        return response()->json(['PassengerTypeList'=> $tbl],200);
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
    public function store(PassengerTypeRequest $request)
    {
        $tbl = PassengerType::create($request->json()->all());
        return response()->json(['PassengerTypeAdd'=> "Saved data Succssefuly!"],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PassengerType  $passengerType
     * @return \Illuminate\Http\Response
     */
    public function show(PassengerType $passengerType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PassengerType  $passengerType
     * @return \Illuminate\Http\Response
     */
    public function edit(PassengerType $passengerType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PassengerType  $passengerType
     * @return \Illuminate\Http\Response
     */
    public function update(PassengerTypeRequest $request, $id)
    {
        $tbl = PassengerType::find($id);
        $tbl->PassengerType = $request->input('PassengerType');
        $tbl->From_Age = $request->input('From_Age');
        $tbl->To_Age = $request->input('To_Age');
        $tbl->Discount = $request->input('Discount');
        $tbl->Status = $request->input('Status');
        if($tbl->update()){
            return response()->json(['PassengerTypeUpdate'=> "Update data Succssefuly!"],200);
       }else{
             return response()->json(['PassengerTypeUpdate'=>'Cant be Update data'],404);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PassengerType  $passengerType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbl = PassengerType::find($id);
        if($tbl->delete()){
            return response()->json(['PassengerTypedelete'=>"Delete data Succssefuly!"],200);
        }else{
            return response()->json(['PassengerTypedelete'=>'Cant be delete Record'],404);
        }

    }
}
