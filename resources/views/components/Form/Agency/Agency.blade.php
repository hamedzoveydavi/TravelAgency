<form method="POST" action="{{route('SubAgencyStor')}}">
@csrf
                  
                   {{--@component('components.object.input',[
                        
                        'Subject'=>'SubAgency Name',
                        'name'=>'SubAgency_NameFA',
                        'value'=>''

                        ])     
                    @endcomponent   

                    @component('components.object.input',[
                        
                        'Subject'=>'SubAgency Name',
                        'name'=>'SubAgency_NameEN',
                        'value'=>''

                        ])     
                    @endcomponent  
                    
                    @component('components.object.input',[
                        
                        'Subject'=>'Tel',
                        'name'=>'SubAgency_Tel',
                        'value'=>''

                        ])     
                    @endcomponent 

                    @component('components.object.input',[
                        
                        'Subject'=>'Fax',
                        'name'=>'SubAgency_Fax',
                        'value'=>''

                        ])     
                    @endcomponent 

                    @component('components.object.input',[
                        
                        'Subject'=>'ManagerNameFA',
                        'name'=>'SubAgency_ManagerNameFA',
                        'value'=>''

                        ])     
                    @endcomponent 


                    @component('components.object.input',[
                        
                        'Subject'=>'ManagerNameEN',
                        'name'=>'SubAgency_ManagerNameEN',
                        'value'=>''

                        ])     
                    @endcomponent 

                    @component('components.object.input',[
                        
                        'Subject'=>'RegisterNo',
                        'name'=>'SubAgency_RegisterNo',
                        'value'=>''

                        ])     
                    @endcomponent 

                   @component('components.object.input',[
                        
                        'Subject'=>'Email',
                        'name'=>'SubAgency_Email',
                        'value'=>''

                        ])     
                    @endcomponent

                    @component('components.object.input',[
                        
                        'Subject'=>'Address',
                        'name'=>'SubAgency_Address',
                        'value'=>''

                        ])     
                    @endcomponent                 

                    @component('components.object.input',[
                        
                        'Subject'=>'Logo',
                        'name'=>'SubAgency_Logo',
                        'value'=>''

                        ])     
                    @endcomponent--}}

                    

                  <div class="form-group row">
                            <label for="SubAgency_NameFA" class="col-md-4 col-form-label text-md-right">{{ __('SubAgency NameFA') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_NameFA" type="text" class="form-control @error('SubAgency_NameFA') is-invalid @enderror" name="SubAgency_NameFA" value="{{ old('SubAgency_NameFA') }}" required autocomplete="SubAgency_NameFA">

                                @error('SubAgency_NameFA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="SubAgency_NameEN" class="col-md-4 col-form-label text-md-right">{{ __('SubAgency NameEN') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_NameEN" type="text" class="form-control @error('SubAgency_NameEN') is-invalid @enderror" name="SubAgency_NameEN" value="{{ old('SubAgency_NameEN') }}" required autocomplete="SubAgency_NameEN">

                                @error('SubAgency_NameEN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="SubAgency_Tel" class="col-md-4 col-form-label text-md-right">{{ __('TEL') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_Tel" type="text" class="form-control @error('SubAgency_Tel') is-invalid @enderror" name="SubAgency_Tel" value="{{ old('SubAgency_Tel') }}" required autocomplete="SubAgency_Tel">

                                @error('SubAgency_Tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="SubAgency_Fax" class="col-md-4 col-form-label text-md-right">{{ __('FAX') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_Fax" type="text" class="form-control @error('SubAgency_Fax') is-invalid @enderror" name="SubAgency_Fax" value="{{ old('SubAgency_Fax') }}" required autocomplete="SubAgency_Fax">

                                @error('SubAgency_Fax')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="SubAgency_ManagerNameFA" class="col-md-4 col-form-label text-md-right">{{ __('ManagerNameFA') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_ManagerNameFA" type="text" class="form-control @error('SubAgency_ManagerNameFA') is-invalid @enderror" name="SubAgency_ManagerNameFA" value="{{ old('SubAgency_ManagerNameFA') }}" required autocomplete="SubAgency_ManagerNameFA">

                                @error('SubAgency_ManagerNameFA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="SubAgency_ManagerNameEN" class="col-md-4 col-form-label text-md-right">{{ __('ManagerNameEN') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_ManagerNameEN" type="text" class="form-control @error('SubAgency_ManagerNameEN') is-invalid @enderror" name="SubAgency_ManagerNameEN" value="{{ old('SubAgency_ManagerNameEN') }}" required autocomplete="SubAgency_ManagerNameEN">

                                @error('SubAgency_ManagerNameEN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="SubAgency_RegisterNo" class="col-md-4 col-form-label text-md-right">{{ __('RegisterNo') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_RegisterNo" type="text" class="form-control @error('SubAgency_RegisterNo') is-invalid @enderror" name="SubAgency_RegisterNo" value="{{ old('SubAgency_RegisterNo') }}" required autocomplete="SubAgency_RegisterNo">

                                @error('SubAgency_RegisterNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                
                    <div class="form-group row">
                            <label for="SubAgency_Email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_Email" type="email" class="form-control @error('SubAgency_Email') is-invalid @enderror" name="SubAgency_Email" value="{{ old('SubAgency_Email') }}" required autocomplete="SubAgency_Email">

                                @error('SubAgency_Email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="SubAgency_Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_Address" type="text" class="form-control @error('SubAgency_Address') is-invalid @enderror" name="SubAgency_Address" value="{{ old('SubAgency_Address') }}" required autocomplete="SubAgency_Address">

                                @error('SubAgency_Address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="SubAgency_Logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>
                            <div class="col-md-6">
                                <input id="SubAgency_Logo" type="text" class="form-control @error('SubAgency_Logo') is-invalid @enderror" name="SubAgency_Logo" value="{{ old('SubAgency_Logo') }}" required autocomplete="SubAgency_Logo">

                                @error('SubAgency_Logo')
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