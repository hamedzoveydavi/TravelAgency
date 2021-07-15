<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
class UsersController extends Controller
{
   
public function index(){

    $tbl = DB::table('users')
    ->join('positions', 'users.Position', '=', 'positions.id')
    ->join('sub_agencies', 'users.Service_location', '=', 'sub_agencies.id')
    ->select('users.*', 'positions.Position_Name','sub_agencies.SubAgency_NameFA')
    ->paginate(10);
    
   /*$users = DB::table('users')
    ->join('contacts', 'users.id', '=', 'contacts.user_id')
    ->join('orders', 'users.id', '=', 'orders.user_id')
    ->select('users.*', 'contacts.phone', 'orders.price')
    ->get();*/


    return view('layouts.includes.BaseInfo.users',['data'=>$tbl]);
}

}
