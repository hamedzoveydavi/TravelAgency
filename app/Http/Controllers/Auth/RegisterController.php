<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }



    public function index()
    {
        //return view('layouts.includes.BaseInfo.users');
        return view('auth.register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Natinal_Code' => ['required', 'integer','unique:users'],
            'birthdate' => ['required', 'string','max:10'],
            'Service_location' =>['required'],
            'Position' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'Status_User' => ['required','integer']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'Gender' => $data['Gender'],
             'Natinal_Code' => $data['Natinal_Code'],
            'Service_location' => $data['Service_location'],
            'birthdate' => $data['birthdate'],
            'Position' => $data['Position'],
            'password' => Hash::make($data['password']),
            
        ]);

        return response()->json(['UserAdd'=> "Saved data Succssefuly!"],200);

        
    }
}
