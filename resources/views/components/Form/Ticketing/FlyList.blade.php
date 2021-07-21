

@if(!empty($data))
    <div  class="container">
                 
       @foreach($data as $list)
                    <div class="col-md-10 col-12">
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
                                    <button type="button" class="btn  btn-info m-12"> انتخاب  بلیط </button><br>
                                   <span style="color:red;font-size:0.75em;padding-right:10px"> {{$list->Chair_avilable}} صندلی باقی مانده</span>
                                </div>
                        </div>
                        </div>	
                    </div>	

        @endforeach


    </div>

@endif
