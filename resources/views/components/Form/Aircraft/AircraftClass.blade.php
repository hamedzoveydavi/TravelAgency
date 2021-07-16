<form method="POST" action="{{route('Aircraft_ClassStor')}}">
@csrf

                    <div class="form-group row">
                            <label for="Class_Name " class="col-md-4 col-form-label text-md-right">{{ __('Class Name') }}</label>
                            <div class="col-md-6">
                                <input id="Class_Name" type="text" class="form-control @error('Class_Name') is-invalid @enderror" name="Class_Name" 
                                
                                 value=@if(!empty($id)) "{{ $data->Class_Name  }}" @else "{{ old('Class_Name') }}" @endif 
                                 required autocomplete="Class_Name">

                                @error('Class_Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Class_Symbol" class="col-md-4 col-form-label text-md-right">{{ __('Symbol') }}</label>
                            <div class="col-md-6">
                                <input id="Class_Symbol" type="text" class="form-control @error('Class_Symbol') is-invalid @enderror" name="Class_Symbol" 
                                
                                 value=@if(!empty($id)) "{{ $data->Class_Symbol  }}" @else "{{ old('Class_Symbol') }}" @endif 
                                 required autocomplete="Class_Symbol">

                                @error('Class_Symbol')
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