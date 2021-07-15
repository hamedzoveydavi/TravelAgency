<form method="POST" action="{{route('FlyRouteStor')}}">
@csrf

                    <div class="form-group row">
                            <label for="SourceFa" class="col-md-4 col-form-label text-md-right">{{ __('SourceFa') }}</label>
                            <div class="col-md-6">
                                <input id="SourceFa" type="text" class="form-control @error('SourceFa') is-invalid @enderror" name="SourceFa" 
                                
                                 value=@if(!empty($id)) "{{ $data->SourceFa }}" @else "{{ old('SourceFa') }}" @endif 
                                 required autocomplete="SourceFa">

                                @error('SourceFa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SourceEN" class="col-md-4 col-form-label text-md-right">{{ __('SourceEN') }}</label>
                            <div class="col-md-6">
                                <input id="SourceEN" type="text" class="form-control @error('SourceEN') is-invalid @enderror" name="SourceEN" 
                                
                                 value=@if(!empty($id)) "{{ $data->SourceEN }}" @else "{{ old('SourceEN') }}" @endif 
                                 required autocomplete="SourceEN">

                                @error('SourceEN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Source_Symbol" class="col-md-4 col-form-label text-md-right">{{ __('Source_Symbol') }}</label>
                            <div class="col-md-6">
                                <input id="Source_Symbol" type="text" class="form-control @error('Source_Symbol') is-invalid @enderror" name="Source_Symbol" 
                                
                                 value=@if(!empty($id)) "{{ $data->Source_Symbol }}" @else "{{ old('Source_Symbol') }}" @endif 
                                 required autocomplete="Source_Symbol">

                                @error('Source_Symbol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 

                        <div class="form-group row">
                            <label for="DestinationFa" class="col-md-4 col-form-label text-md-right">{{ __('DestinationFa') }}</label>
                            <div class="col-md-6">
                                <input id="DestinationFa" type="text" class="form-control @error('DestinationFa') is-invalid @enderror" name="DestinationFa" 
                                
                                 value=@if(!empty($id)) "{{ $data->DestinationFa }}" @else "{{ old('DestinationFa') }}" @endif 
                                 required autocomplete="DestinationFa">

                                @error('DestinationFa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DestinationEN" class="col-md-4 col-form-label text-md-right">{{ __('DestinationEN') }}</label>
                            <div class="col-md-6">
                                <input id="DestinationEN" type="text" class="form-control @error('DestinationEN') is-invalid @enderror" name="DestinationEN" 
                                
                                 value=@if(!empty($id)) "{{ $data->DestinationEN }}" @else "{{ old('DestinationEN') }}" @endif 
                                 required autocomplete="DestinationEN">

                                @error('DestinationEN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Destination_Symbol" class="col-md-4 col-form-label text-md-right">{{ __('Destination Symbol') }}</label>
                            <div class="col-md-6">
                                <input id="Destination_Symbol" type="text" class="form-control @error('Destination_Symbol') is-invalid @enderror" name="Destination_Symbol" 
                                
                                 value=@if(!empty($id)) "{{ $data->Destination_Symbol }}" @else "{{ old('Destination_Symbol') }}" @endif 
                                 required autocomplete="Destination_Symbol">

                                @error('Destination_Symbol')
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