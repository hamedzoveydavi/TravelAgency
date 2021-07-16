
<form method="POST" action="{{route('PassengerTypeStor')}}">
@csrf

                        <div class="form-group row">
                            <label for="PassengerType" class="col-md-4 col-form-label text-md-right">{{ __('PassengerType') }}</label>
                            <div class="col-md-6">
                                <select name="PassengerType" class="form-select" aria-label="Default select example">
                                     <option selected>Open this select menu</option>
                                             <option name="PassengerType" value="ADL">ADL</option>
                                             <option name="PassengerType" value="CHD">CHD</option>
                                             <option name="PassengerType" value="INF">INF</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="From_Age" class="col-md-4 col-form-label text-md-right">{{ __('From Age') }}</label>
                            <div class="col-md-6">
                                <input id="From_Age" type="text" class="form-control @error('From_Age') is-invalid @enderror" name="From_Age" 
                                
                                 value=@if(!empty($id)) "{{ $data->From_Age }}" @else "{{ old('From_Age') }}" @endif 
                                 required autocomplete="From_Age">

                                @error('From_Age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="To_Age" class="col-md-4 col-form-label text-md-right">{{ __('To Age') }}</label>
                            <div class="col-md-6">
                                <input id="To_Age" type="text" class="form-control @error('To_Age') is-invalid @enderror" name="To_Age" 
                                
                                 value=@if(!empty($id)) "{{ $data->To_Age }}" @else "{{ old('To_Age') }}" @endif 
                                 required autocomplete="To_Age">

                                @error('To_Age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 

                        <div class="form-group row">
                            <label for="Discount" class="col-md-4 col-form-label text-md-right">{{ __('Discount') }}</label>
                            <div class="col-md-6">
                                <input id="Discount" type="text" class="form-control @error('Discount') is-invalid @enderror" name="Discount" 
                                
                                 value=@if(!empty($id)) "{{ $data->Discount }}" @else "{{ old('Discount') }}" @endif 
                                 required autocomplete="Discount">

                                @error('Discount')
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