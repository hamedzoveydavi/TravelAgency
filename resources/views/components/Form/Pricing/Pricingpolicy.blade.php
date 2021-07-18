<form method="POST" action="{{route('PricingPolicyStor')}}">
@csrf

                    <div class="form-group row">
                            <label for="SeatNo_from" class="col-md-4 col-form-label text-md-right">{{ __('SeatNo from') }}</label>
                            <div class="col-md-6">
                                <input id="SeatNo_from" type="number" class="form-control @error('SourceFa') is-invalid @enderror" name="SeatNo_from" 
                                
                                 value=@if(!empty($id)) "{{ $data->SeatNo_from }}" @else "{{ old('SeatNo_from') }}" @endif 
                                 required autocomplete="SeatNo_from">

                                @error('SeatNo_from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeatNo_To" class="col-md-4 col-form-label text-md-right">{{ __('SeatNo To') }}</label>
                            <div class="col-md-6">
                                <input id="SeatNo_To" type="number" class="form-control @error('SeatNo_To') is-invalid @enderror" name="SeatNo_To" 
                                
                                 value=@if(!empty($id)) "{{ $data->SeatNo_To }}" @else "{{ old('SeatNo_To') }}" @endif 
                                 required autocomplete="SeatNo_To">

                                @error('SeatNo_To')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Price_Percentage" class="col-md-4 col-form-label text-md-right">{{ __('Price Percentage') }}</label>
                            <div class="col-md-6">
                                <input id="Price_Percentage" type="number" class="form-control @error('Source_Symbol') is-invalid @enderror" name="Price_Percentage" 
                                
                                 value=@if(!empty($id)) "{{ $data->Price_Percentage }}" @else "{{ old('Price_Percentage') }}" @endif 
                                 required autocomplete="Price_Percentage">

                                @error('Price_Percentage')
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