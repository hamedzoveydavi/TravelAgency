
<form method="POST" action="{{route('PassengerluggageStor')}}">
@csrf

                      

                        <div class="form-group row">
                            <label for="NumberOfLuggage" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Luggage') }}</label>
                            <div class="col-md-6">
                                <input id="NumberOfLuggage" type="text" class="form-control @error('NumberOfLuggage') is-invalid @enderror" name="NumberOfLuggage" 
                                
                                 value=@if(!empty($id)) "{{ $data->NumberOfLuggage }}" @else "{{ old('NumberOfLuggage') }}" @endif 
                                 required autocomplete="NumberOfLuggage">

                                @error('NumberOfLuggage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="LuggageWeight" class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>
                            <div class="col-md-6">
                                <input id="LuggageWeight" type="text" class="form-control @error('LuggageWeight') is-invalid @enderror" name="LuggageWeight" 
                                
                                 value=@if(!empty($id)) "{{ $data->LuggageWeight }}" @else "{{ old('LuggageWeight') }}" @endif 
                                 required autocomplete="LuggageWeight">

                                @error('LuggageWeight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 

                        <div class="form-group row">
                            <label for="NumberOfhandbag" class="col-md-4 col-form-label text-md-right">{{ __('Number Of handbag') }}</label>
                            <div class="col-md-6">
                                <input id="NumberOfhandbag" type="text" class="form-control @error('NumberOfhandbag') is-invalid @enderror" name="NumberOfhandbag" 
                                
                                 value=@if(!empty($id)) "{{ $data->NumberOfhandbag }}" @else "{{ old('NumberOfhandbag') }}" @endif 
                                 required autocomplete="NumberOfhandbag">

                                @error('NumberOfhandbag')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="handbagWeight" class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>
                            <div class="col-md-6">
                                <input id="handbagWeight" type="text" class="form-control @error('handbagWeight') is-invalid @enderror" name="handbagWeight" 
                                
                                 value=@if(!empty($id)) "{{ $data->handbagWeight }}" @else "{{ old('handbagWeight') }}" @endif 
                                 required autocomplete="handbagWeight">

                                @error('handbagWeight')
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