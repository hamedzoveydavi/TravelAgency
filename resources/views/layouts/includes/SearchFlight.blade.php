@extends('layouts.adminpanel')
@section('content')

@component('components.Form.Ticketing.SearchFly',[
    ])     @endcomponent 


    @component('components.Form.Ticketing.FlyList',[
        'data'=>$data
    ])     @endcomponent 

    
@endsection