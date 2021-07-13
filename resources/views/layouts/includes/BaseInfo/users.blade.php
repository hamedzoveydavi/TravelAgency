       
@extends('layouts.adminpanel')
@section('content')

<div class="container">

                    @component('components.input',[
                            'name'=>'Natinal_Code',
                            'Subject'=>'نام',
                            'value'=>''
                    ])
                    @endcomponent

                   @component('components.input',[
                            'name'=>'Sex',
                            'Subject'=>'جنسیت',
                            'value'=>''
                    ])
                    @endcomponent

                    @component('components.input',[
                            'name'=>'Natinal_Code',
                            'Subject'=>'شماره ملی',
                            'value'=>''
                    ])
                    @endcomponent

                   
                    @component('components.input',[
                            'name'=>'Service_location',
                            'Subject'=>'نام شرکت / آژانس',
                            'value'=>''
                    ])
                    @endcomponent

                    @component('components.input',[
                            'name'=>'beirthdate',
                            'Subject'=>'تاریخ تولد',
                            'value'=>''
                    ])
                    @endcomponent

                    @component('components.input',[
                            'name'=>'Position',
                            'Subject'=>'موقعیت شغلی',
                            'value'=>''
                    ])
                    @endcomponent

                    @component('components.inputPassword',[
                            'name'=>'Password',
                            'Subject'=>'رمز عبور',
                            'value'=>''
                    ])
                    @endcomponent

                    @component('components.inputPassword',[
                            'name'=>'password-confirm',
                            'Subject'=>'تکرار رمز عبور',
                            'value'=>''
                    ])
                    @endcomponent
                    



  </div>
  @endsection