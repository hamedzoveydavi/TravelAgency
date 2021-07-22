@extends('layouts.adminpanel')
@section('content')

<form method="post" action="{{route('TicketStore')}}">
    @csrf 

    <div  class="container"> 
            
        <div class="row">
            <div class="col">
                <strong>{{$id}} مشخصات مسافران را وارد کنید </strong>
                <input name="FlyProgram_id" type="text" value="{{$id}}" style="display:none">
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
    

    <hr>

    <div  class="container" style="margin-top:20px"> 
    

                         <div class="form-group row">
                         <input name="PassengerType_id" type="text" value="1">
                         
                            
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


                        </div>  

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
