@extends('layouts.adminpanel')
@section('content')

@component('components.Form.Ticketing.SearchFly',[
    ])     @endcomponent 


    @if (!empty($message))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if(!empty($data))
        @component('components.Form.Ticketing.FlyList',[
            'data'=>$data
        ])     @endcomponent 
    @endif

  
    
@endsection