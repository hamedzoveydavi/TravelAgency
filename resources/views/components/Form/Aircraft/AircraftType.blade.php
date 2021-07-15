<form method="POST" action="{{route('AircraftTypeStor')}}">
@csrf

                    <div class="form-group row">
                            <label for="Type_Name" class="col-md-4 col-form-label text-md-right">{{ __('Type Name') }}</label>
                            <div class="col-md-6">
                                <input id="Type_Name" type="text" class="form-control @error('Type_Name') is-invalid @enderror" name="Type_Name" 
                                
                                 value=@if(!empty($id)) "{{ $data->Type_Name }}" @else "{{ old('Type_Name') }}" @endif 
                                 required autocomplete="Type_Name">

                                @error('Type_Name')
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