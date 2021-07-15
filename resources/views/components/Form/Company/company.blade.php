<?php 
use App\Models\Company;
if(!empty($id)){
    $data = Company::find($id);
}

?>

@if(empty($id))
    <form method="POST" action="{{route('CompanyStor')}}">
    @csrf
@else
    <form method="POST" action="{{route('CompanyUpdate',[$id])}}">
    @csrf

    <input type="hidden" name="_method" value="PUT">
@endif
                  <div class="form-group row">
                            <label for="CompanyName_FA" class="col-md-4 col-form-label text-md-right">{{ __('Company FA') }}</label>
                            <div class="col-md-6">
                                <input id="CompanyName_FA" type="text" class="form-control @error('CompanyName_FA') is-invalid @enderror" name="CompanyName_FA" 
                                
                                 value=@if(!empty($id)) "{{ $data->CompanyName_FA }}" @else "{{ old('CompanyName_FA') }}" @endif 
                                 required autocomplete="CompanyName_FA">

                                @error('CompanyName_FA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="CompanyName_EN" class="col-md-4 col-form-label text-md-right">{{ __('Company EN') }}</label>
                            <div class="col-md-6">
                                <input id="CompanyName_EN" type="text" class="form-control @error('CompanyName_EN') is-invalid @enderror" name="CompanyName_EN" 
                                value=@if(!empty($id))  "{{ $data->CompanyName_EN }}"  @else "{{ old('CompanyName_EN') }}" @endif required autocomplete="CompanyName_EN">

                                @error('CompanyName_EN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="ManagerName_FA" class="col-md-4 col-form-label text-md-right">{{ __('Manager FA') }}</label>
                            <div class="col-md-6">
                                <input id="ManagerName_FA" type="text" class="form-control @error('ManagerName_FA') is-invalid @enderror" name="ManagerName_FA" 
                                value=@if(!empty($id)) "{{ $data->ManagerName_FA}}"  @else "{{ old('ManagerName_FA') }}" @endif required autocomplete="ManagerName_FA">

                                @error('ManagerName_FA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="ManagerName_EN" class="col-md-4 col-form-label text-md-right">{{ __('Manager EN') }}</label>
                            <div class="col-md-6">
                                <input id="ManagerName_EN" type="text" class="form-control @error('ManagerName_EN') is-invalid @enderror" name="ManagerName_EN" 
                                value=@if(!empty($id)) "{{$data->ManagerName_EN}}" @else  "{{ old('ManagerName_EN') }}" @endif required autocomplete="ManagerName_EN">

                                @error('ManagerName_EN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Register_No" class="col-md-4 col-form-label text-md-right">{{ __('Register No') }}</label>
                            <div class="col-md-6">
                                <input id="Register_No" type="text" class="form-control @error('Register_No') is-invalid @enderror" name="Register_No" 
                                value=@if(!empty($id)) "{{$data->Register_No}}"  @else "{{ old('Register_No') }}" @endif required autocomplete="Register_No">

                                @error('Register_No')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                
                    <div class="form-group row">
                            <label for="Company_Email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="Company_Email" type="email" class="form-control @error('Company_Email') is-invalid @enderror" name="Company_Email" 
                                value= @if(!empty($id)) "{{ $data->Company_Email}}" @else "{{ old('Company_Email') }}" @endif required autocomplete="Company_Email">

                                @error('Company_Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="Tel" class="col-md-4 col-form-label text-md-right">{{ __('Tel') }}</label>
                            <div class="col-md-6">
                                <input id="Tel" type="text" class="form-control @error('Tel') is-invalid @enderror" name="Tel" 
                                value=@if(!empty($id)) "{{ $data->Tel }}" @else "{{ old('Tel') }}" @endif required autocomplete="Tel">

                                @error('Tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 


                        <div class="form-group row">
                            <label for="Fax" class="col-md-4 col-form-label text-md-right">{{ __('Fax') }}</label>
                            <div class="col-md-6">
                                <input id="Fax" type="text" class="form-control @error('Fax') is-invalid @enderror" name="Fax"
                                 value=@if(!empty($id)) "{{$data->Fax}}" @else "{{ old('Fax') }}" @endif required autocomplete="FAx">

                                @error('Fax')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="Company_Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="Company_Address" type="text" class="form-control @error('Company_Address') is-invalid @enderror" name="Company_Address" 
                                value=@if(!empty($id))  "{{ $data->Company_Address}}" @else "{{ old('Company_Address') }}" @endif required autocomplete="Company_Address">

                                @error('Company_Address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        



                        <div class="form-group row">
                            <label for="Company_Logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>
                            <div class="col-md-6">
                                <input id="Company_Logo" type="text" class="form-control @error('Company_Logo') is-invalid @enderror" name="Company_Logo"
                                 value=@if(!empty($id)) "{{ $data->Company_Logo }}"  @else "{{ old('Company_Logo') }}" @endif required autocomplete="Company_Logo">

                                @error('Company_Logo')
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