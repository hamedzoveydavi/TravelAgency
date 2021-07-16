<?php 
use App\Models\Aircraft_Class;
use App\Models\Aircraft_Type;

$AirCraftType =Aircraft_Type::all();
$AircraftClass = Aircraft_Class::all();
?>




<form method="POST" action="{{route('Aircraft_DetailStor')}}">
@csrf


                    <div class="form-group row">
                            <label for="Type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                            <div class="col-md-6">
                                <select name="Type_Name" class="form-select" aria-label="Default select example">
                                  <option selected>Open this select menu</option>
                                    @foreach($AirCraftType as $TypeList)
                                        <option name="Type_Name" value="{{$TypeList->Type_Name}}">{{$TypeList->Type_Name}}</option>
                                    @endforeach
                                    </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Type" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>
                            <div class="col-md-6">
                                <select name="Class_Name" class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    @foreach($AircraftClass as $ClassList)
                                         <option name="Class_Name" value="{{$ClassList->Class_Symbol}}">{{$ClassList->Class_Name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
              
                        <div class="form-group row">
                            <label for="Total_Chair" class="col-md-4 col-form-label text-md-right">{{ __('Total Chair') }}</label>
                            <div class="col-md-6">
                                <input id="Total_Chair" type="text" class="form-control @error('Total_Chair') is-invalid @enderror" name="Total_Chair" 
                                
                                 value=@if(!empty($id)) "{{ $data->Total_Chair  }}" @else "{{ old('Total_Chair') }}" @endif 
                                 required autocomplete="Total_Chair">

                                @error('Total_Chair')
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