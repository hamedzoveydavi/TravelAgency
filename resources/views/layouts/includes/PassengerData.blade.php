@extends('layouts.adminpanel')
@section('content')


                    <div  class="container">
                 
               
                              <div class="col-md-12 col-12">
                                  <div class="media bg-white b-1 border-success mb-20">
                                  <span class="avatar status-success" >
                                      <img class="avatar" src="{{asset('AirlineLogo/izglogo.png')}}"  alt="...">
                                      زاگرس
                                      <span class="text-truncate" style="padding-right:20px">شماره پرواز:  {{$list->Symbol}} {{$list->FlyNo}}</span>
                                  </span>
                                  <span class="text-truncate" style="position:absolute;padding:11px 30%">{{$list->FlydateFA}} </span>
                                  <div class="media-body" style="padding-right:60px">
                                      <p>{{$list->Class_Name}} <b class="float-right" style="color:green">{{number_format($list->Price)}} ریال</b></p>
                                      <strong>
                                          <span class="text-truncate"> {{$list->SourceFa}} ({{$list->Source_Symbol}}) 
                                              ----------------------------------->    
                                          {{$list->DestinationFa}} 
                                           ({{$list->Destination_Symbol}}) 
                                          </span>
                                                                                                  
                                          <br>
                                          <span class="text-truncate">{{$list->Type_Name}}</span><br>
                                          <span class="text-truncate">{{$list->DepartureTime_at}} </span>
                                          <span class="text-truncate" style="padding-right:40%">{{$list->ArrivalTimeLocal_at}} </span>
                                          
                                      </strong>
                                     
                                          <div class="d-inline-block pull-right mt-10">
                                             
                                             <span style="color:red;font-size:0.75em;padding-right:10px"> {{$list->Chair_avilable}} صندلی باقی مانده</span>
                                          </div>
                                  </div>
                                  </div>	
                             </div>	
                    </div>

<hr>




    <div  class="container"> 
            
        <div class="row">
            <div class="col">
                <strong> مشخصات مسافران را وارد کنید </strong>
                
            </div>
        <div class="col">       

        <div class="col-md-10 col-12">    
            <div class="form-group row mb-0">
                <div class="col-md-12 offset-md-12">
                    <input type="number" style="width:60px;height:43px">
                    <button type="submit" class="btn btn-primary">
                        {{ __('ADL') }}
                    </button>
                    <input type="number" style="width:60px;height:43px">
                    <button type="submit" class="btn btn-primary">
                        {{ __('CHD') }}
                    </button>
                    <input type="number" style="width:60px;height:43px">
                    <button type="submit" class="btn btn-primary">
                        {{ __('INF') }}
                    </button>
                </div>
            </div>
        </div>
    
    </div>	
    

    <form method="post" action="{{route('TicketStore')}}">
    @csrf 

    <div class="col-md-12 col-12" style="margin-top:30px">
        <div class="media bg-white b-1 border-success mb-20">

        <input name="FlyProgram_id" type="text" value="{{$id}}" style="display:none">


                              <select name="PassengerType_id" class="form-select" aria-label="Default select example"  style="margin-right:5px">
                                    <option selected></option>
                                         <option name="PassengerType_id" value="1">ADL</option>
                                         <option name="PassengerType_id" value="2">CHD</option>
                                         <option name="PassengerType_id" value="2">INF</option>
                              </select>


                              
                         <div class="form-group row" style="margin-top:15px">
                                                                             
                            <input name="Name" type="text" placeholder="Name">
                            <input name="Family" type="text" placeholder="Family" style="margin-right:5px">
                               
                            <select name="Gender" class="form-select" aria-label="Default select example"  style="margin-right:5px">
                                    <option selected></option>
                                         <option name="Gender" value="1">Men</option>
                                         <option name="Gender" value="2">Women</option>
                            </select>

                                <input name="National_Code" type="text" placeholder="National Code" style="margin-right:5px">

                                <select name="d-s" class="form-select" aria-label="Default select example"  style="margin-right:5px">
                                    <option selected></option>
                                         <option name="d-s" value="01">01</option>
                                         <option name="d-s" value="02">02</option>
                                         <option name="d-s" value="03">03</option>
                                         <option name="d-s" value="04">04</option>
                                         <option name="d-s" value="05">05</option>
                                         <option name="d-s" value="06">06</option>
                                         <option name="d-s" value="07">07</option>
                                         <option name="d-s" value="08">08</option>
                                         <option name="d-s" value="09">09</option>
                                         <option name="d-s" value="10">10</option>
                                         <option name="d-s" value="11">11</option>
                                         <option name="d-s" value="12">12</option>
                                         <option name="d-s" value="13">13</option>
                                         <option name="d-s" value="14">14</option>
                                         <option name="d-s" value="15">15</option>
                                         <option name="d-s" value="16">16</option>
                                </select>


                                <select name="m-s" class="form-select" aria-label="Default select example"  style="margin-right:5px">
                                    <option selected></option>
                                         <option name="m-s" value="1">فروردین</option>
                                         <option name="m-s" value="2">اردیبهشت</option>
                                         <option name="m-s" value="3">خرداد</option>
                                         <option name="m-s" value="4">تیر</option>
                                         <option name="m-s" value="5">مرداد</option>
                                         <option name="m-s" value="6">شهریور</option>
                                         <option name="m-s" value="7">مهر</option>
                                         <option name="m-s" value="8">آبان</option>
                                         <option name="m-s" value="9">آذر</option>
                                         <option name="m-s" value="10">دی</option>
                                         <option name="m-s" value="11">بهمن</option>
                                         <option name="m-s" value="12">اسفند</option>
                                    </select>

                                <select name="y-s" class="form-select" aria-label="Default select example"  style="margin-right:5px">
                                    <option selected></option>
                                         <option name="y-s" value="1400">1400</option>
                                         <option name="y-s" value="1399">1399</option>
                                         <option name="y-s" value="1398">1398</option>
                                         <option name="y-s" value="1397">1397</option>
                                         <option name="y-s" value="1396">1396</option>
                                         <option name="y-s" value="1395">1395</option>
                                         <option name="y-s" value="1394">1394</option>
                                         <option name="y-s" value="1393">1393</option>
                                    </select>

                        </div>

                        <div class="form-group row">

                        <input name="Nationality" type="text" placeholder="Nationality" >
                        <input name="Passport_No" type="text" placeholder="Passport No" style="margin-right:5px">
                        <input name="Passport_ExpireDate" type="date" placeholder="Expire Date" style="margin-right:5px">


                                <select name="d-m" class="form-select" aria-label="Default select example"  style="margin-right:5px">
                                    <option selected></option>
                                         <option name="d-m" value="01">01</option>
                                         <option name="d-m" value="02">02</option>
                                         <option name="d-m" value="03">03</option>
                                         <option name="d-m" value="04">04</option>
                                         <option name="d-m" value="05">05</option>
                                         <option name="d-m" value="06">06</option>
                                         <option name="d-m" value="07">07</option>
                                         <option name="d-m" value="08">08</option>
                                         <option name="d-m" value="09">09</option>
                                         <option name="d-m" value="10">10</option>
                                         <option name="d-m" value="11">11</option>
                                         <option name="d-m" value="12">12</option>
                                         <option name="d-m" value="13">13</option>
                                         <option name="d-m" value="14">14</option>
                                         <option name="d-m" value="15">15</option>
                                         <option name="d-m" value="16">16</option>
                                </select>


                                <select name="m-m" class="form-select" aria-label="Default select example"  style="margin-right:5px">
                                    <option selected></option>
                                         <option name="m-m" value="1">Jan</option>
                                         <option name="m-m" value="2">Feb</option>
                                         <option name="m-m" value="3">Mar</option>
                                         <option name="m-m" value="4">Apr</option>
                                         <option name="m-m" value="5">May</option>
                                         <option name="m-m" value="6">Jun</option>
                                         <option name="m-m" value="7">Jul</option>
                                         <option name="m-m" value="8">Aug</option>
                                         <option name="m-m" value="9">Sep</option>
                                         <option name="m-m" value="10">Oct</option>
                                         <option name="m-m" value="11">Nov</option>
                                         <option name="m-m" value="12">Dec</option>
                                         
                                </select>


                                <select name="y-m" class="form-select" aria-label="Default select example"  style="margin-right:5px">
                                    <option selected></option>
                                         <option name="y-m" value="2021">2021</option>
                                         <option name="y-m" value="2020">2020</option>
                                         <option name="y-m" value="2019">2019</option>
                                         <option name="y-m" value="2018">2018</option>
                                         <option name="y-m" value="2017">2017</option>
                                         <option name="y-m" value="2016">2016</option>
                                         <option name="y-m" value="2015">2015</option>
                                         <option name="y-m" value="2015">2015</option>
                                </select>

                
                                <input name="Price" type="text" value="{{number_format($Price)}}"
                                 style="position:absolute;margin:60px 230px 0 0" readonly> 

                                 <input name="Price" type="text" value="{{number_format($dagency)}}"
                                 style="position:absolute;margin:60px 0 0 0" readonly> 
                                

                        </div>  
                       
              
               
                
            
        </div>
    </div>

    <div style="text-align:left"> 
        هزینه کل : {{number_format($list->Price)}} ریال
</div>


    <div class="col-md-10 col-12">    
            <div class="form-group row mb-0">
                <div class="col-md-12 offset-md-12">
                   
                    <button type="submit" class="btn btn-primary">
                        {{ __('ادامه فرآیند خرید') }}
                    </button>
                 
                </div>
            </div>
        </div>

</form>

@endsection
