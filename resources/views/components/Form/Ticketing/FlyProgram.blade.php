<?php
    use App\Models\FlyRoute;
    use App\Models\Aircraft_Detail;
    use App\Models\Passengerluggage_rules;
    use App\Models\Refund_rules;
    use App\Models\Airline;


        $rout = FlyRoute::all();
        $AcDetail = Aircraft_Detail::all();
        $luggageroul = Passengerluggage_rules::all();
        $Airline = Airline::all();

?>

<form method="POST" action="{{route('FlyProgramStor')}}">
@csrf



                    <div class="form-group row">
                            <label for="FlyType" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                            <div class="col-md-6">
                                <select name="FlyType" class="form-select" aria-label="Default select example" style="width:100%">
                                    <option selected>Open this select menu</option>
                                         <option name="FlyType" value="1">Departure</option>
                                         <option name="FlyType" value="2">Arrival</option>
                                    </select>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="FlydateFA" class="col-md-4 col-form-label text-md-right">{{ __('date FA') }}</label>
                            <div class="col-md-6">
                                <input id="FlydateFA" type="date" class="form-control @error('FlydateFA') is-invalid @enderror" name="FlydateFA" 
                                
                                 value=@if(!empty($id)) "{{ $data->FlydateFA  }}" @else "{{ old('FlydateFA') }}" @endif 
                                 required autocomplete="FlydateFA">

                                @error('FlydateFA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="FlydateEN" class="col-md-4 col-form-label text-md-right">{{ __('date EN') }}</label>
                            <div class="col-md-6">
                                <input id="FlydateEN" type="date" class="form-control @error('FlydateEN') is-invalid @enderror" name="FlydateEN" 
                                
                                 value=@if(!empty($id)) "{{ $data->FlydateEN  }}" @else "{{ old('FlydateEN') }}" @endif 
                                 required autocomplete="FlydateEN">

                                @error('FlydateEN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Airlines_id" class="col-md-4 col-form-label text-md-right">{{ __('Airlines') }}</label>
                            <div class="col-md-6">
                                <select name="Airlines_id" class="form-select" aria-label="Default select example"  style="width:100%">
                                    <option selected>Open this select menu</option>
                                    @foreach($Airline as $Airlines)
                                         <option name="Airlines_id" value="{{$Airlines->id}}">{{$Airlines->Symbol}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>


                       <div class="form-group row">
                            <label for="AircraftDetail_id" class="col-md-4 col-form-label text-md-right">{{ __('Aircraft Detail') }}</label>
                            <div class="col-md-6">
                                <select name="AircraftDetail_id" class="form-select" aria-label="Default select example"  style="width:100%">
                                    <option selected>Open this select menu</option>
                                    @foreach($AcDetail as $details)
                                         <option name="AircraftDetail_id" value="{{$details->id}}">Type: {{$details->Type_Name}} /Class: {{$details->Class_Name}} /Seat: {{$details->Total_Chair}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Route" class="col-md-4 col-form-label text-md-right">{{ __('Route') }}</label>
                            <div class="col-md-6">
                                <select name="Route_id" class="form-select" aria-label="Default select example"  style="width:100%">
                                    <option selected>Open this select menu</option>
                                    @foreach($rout as $routlist)
                                         <option name="Route_id" value="{{$details->id}}">{{$routlist->Source_Symbol}} - {{$routlist->Destination_Symbol}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

              
                        <div class="form-group row">
                            <label for="FlyNo" class="col-md-4 col-form-label text-md-right">{{ __('Fly Number') }}</label>
                            <div class="col-md-6">
                                <input id="FlyNo" type="number" class="form-control @error('FlyNo') is-invalid @enderror" name="FlyNo" 
                                
                                 value=@if(!empty($id)) "{{ $data->FlyNo  }}" @else "{{ old('FlyNo') }}" @endif 
                                 required autocomplete="FlyNo">

                                @error('FlyNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                            <div class="col-md-6">
                                <input id="Price" type="text" onkeyup="separateNum(this.value,this);" class="form-control @error('Price') is-invalid @enderror" name="Price" 
                                
                                 value=@if(!empty($id)) "{{ $data->Price  }}" @else "{{ old('Price') }}" @endif 
                                 required autocomplete="Price">

                                @error('Price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="luggageRules_id" class="col-md-4 col-form-label text-md-right">{{ __('luggage Rules') }}</label>
                            <div class="col-md-6">
                                <select name="luggageRules_id" class="form-select" aria-label="Default select example"  style="width:100%">
                                    <option selected>Open this select menu</option>
                                    @foreach($luggageroul as $laggagelist)
                                         <option name="luggageRules_id" value="{{$laggagelist->id}}">L: {{$laggagelist->NumberOfLuggage}}/{{$laggagelist->LuggageWeight}} kg -
                                                                                                     H: {{$laggagelist->NumberOfhandbag}}/{{$laggagelist->handbagWeight}} kg
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>


                        

                        <div class="form-group row">
                            <label for="DepartureTime_at" class="col-md-4 col-form-label text-md-right">{{ __('Departure Time') }}</label>
                            <div class="col-md-6">
                                <input id="DepartureTime_at" type="time" class="form-control @error('DepartureTime_at') is-invalid @enderror" name="DepartureTime_at" 
                                
                                 value=@if(!empty($id)) "{{ $data->DepartureTime_at  }}" @else "{{ old('DepartureTime_at') }}" @endif 
                                 required autocomplete="DepartureTime_at">

                                @error('DepartureTime_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="ArrivalTimeLocal_at" class="col-md-4 col-form-label text-md-right">{{ __('Arrival Time Local') }}</label>
                            <div class="col-md-6">
                                <input id="ArrivalTimeLocal_at" type="time" class="form-control @error('ArrivalTimeLocal_at') is-invalid @enderror" name="ArrivalTimeLocal_at" 
                                
                                 value=@if(!empty($id)) "{{ $data->ArrivalTimeLocal_at  }}" @else "{{ old('ArrivalTimeLocal_at') }}" @endif 
                                 required autocomplete="ArrivalTimeLocal_at">

                                @error('ArrivalTimeLocal_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="FlyTime_at" class="col-md-4 col-form-label text-md-right">{{ __('Fly Time') }}</label>
                            <div class="col-md-6">
                                <input id="FlyTime_at" type="time" class="form-control @error('FlyTime_at') is-invalid @enderror" name="FlyTime_at" 
                                
                                 value=@if(!empty($id)) "{{ $data->FlyTime_at  }}" @else "{{ old('FlyTime_at') }}" @endif 
                                 required autocomplete="FlyTime_at">

                                @error('FlyTime_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Chair_avilable" class="col-md-4 col-form-label text-md-right">{{ __('Seat avilable') }}</label>
                            <div class="col-md-6">
                                <input id="Chair_avilable" type="number" class="form-control @error('Chair_avilable') is-invalid @enderror" name="Chair_avilable" 
                                
                                 value=@if(!empty($id)) "{{ $data->Chair_avilable  }}" @else "{{ old('Chair_avilable') }}" @endif 
                                 required autocomplete="Chair_avilable">

                                @error('Chair_avilable')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <input id="Status" type="number" class="form-control @error('Status') is-invalid @enderror" name="Status" 
                                
                                 value=@if(!empty($id)) "{{ $data->Status  }}" @else "{{ old('Status') }}" @endif 
                                 required autocomplete="Status">

                                @error('Status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       

                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>


</form>

<script>
    function separateNum(value, input) {
        /* seprate number input 3 number */
        var nStr = value + '';
        nStr = nStr.replace(/\,/g, "");
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        if (input !== undefined) {

            input.value = x1 + x2;
        } else {
            return x1 + x2;
        }
    }
</script>