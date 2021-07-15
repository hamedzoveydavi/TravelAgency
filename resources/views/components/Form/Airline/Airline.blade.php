                        
         <form  method="POST" action="{{route('AirlineStor')}}">           
               @csrf         
                        <div class="form-group row">
                            <label for="AirlineFA" class="col-md-4 col-form-label text-md-right">{{ __('Airline FA') }}</label>
                            <div class="col-md-6">
                                <input id="AirlineFA" type="text" class="form-control @error('AirlineFA') is-invalid @enderror" name="AirlineFA" 
                                
                                 value=@if(!empty($id)) "{{ $data->AirlineFA }}" @else "{{ old('AirlineFA') }}" @endif 
                                 required autocomplete="AirlineFA">

                                @error('AirlineFA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="AirlineEN" class="col-md-4 col-form-label text-md-right">{{ __('Airline EN') }}</label>
                            <div class="col-md-6">
                                <input id="AirlineEN" type="text" class="form-control @error('AirlineEN') is-invalid @enderror" name="AirlineEN" 
                                
                                 value=@if(!empty($id)) "{{ $data->AirlineEN }}" @else "{{ old('AirlineEN') }}" @endif 
                                 required autocomplete="AirlineEN">

                                @error('AirlineEN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="Symbol" class="col-md-4 col-form-label text-md-right">{{ __('Symbol') }}</label>
                            <div class="col-md-6">
                                <input id="Symbol" type="text" class="form-control @error('Symbol') is-invalid @enderror" name="Symbol" 
                                
                                 value=@if(!empty($id)) "{{ $data->Symbol }}" @else "{{ old('Symbol') }}" @endif 
                                 required autocomplete="Symbol">

                                @error('Symbol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('logo') }}</label>
                            <div class="col-md-6">
                                <input id="logo" type="text" class="form-control @error('logo') is-invalid @enderror" name="logo" 
                                
                                 value=@if(!empty($id)) "{{ $data->logo }}" @else "{{ old('logo') }}" @endif 
                                 required autocomplete="logo">

                                @error('logo')
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