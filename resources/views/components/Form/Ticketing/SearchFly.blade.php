<?php 

use App\Models\FlyRoute;
$route_so =FlyRoute::select('SourceFa','Source_Symbol')->distinct()->get();
$route_des =FlyRoute::select('DestinationFa','Destination_Symbol')->distinct()->get();
?>


<section class="content">
			<div class="row">
			
				<div class="col-12">
					<div class="box">
						<div class="box-header">
						


<form method="post" action="{{route('searchflylist')}}">
    @csrf
<div class="container">
  <div class="row">
    <div class="col-sm">
      
                       <div class="form-group row">
                            <label for="Route" class="col-md-4 col-form-label text-md-right">{{ __('مبداء') }}</label>
                            <div class="col-md-8">
                                <select name="Source" class="form-select" aria-label="Default select example"  style="width:100%">
                                    <option selected>Open this select menu</option>
                                    @foreach($route_so as $routlist)
                                         <option name="Source" value="{{$routlist->Source_Symbol}}">{{$routlist->SourceFa }} ({{$routlist->Source_Symbol}})</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

    </div>
    <div class="col-sm">
     
                        <div class="form-group row">
                            <label for="Route" class="col-md-4 col-form-label text-md-right">{{ __('مقصد') }}</label>
                            <div class="col-md-8">
                                <select name="Distination" class="form-select" aria-label="Default select example"  style="width:100%">
                                    <option selected>Open this select menu</option>
                                    @foreach($route_des as $routlist)
                                         <option name="Distination" value="{{$routlist->Destination_Symbol}}">{{$routlist->DestinationFa }} ({{$routlist->Destination_Symbol}}) </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

    </div>
    <div class="col-sm">
                    
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('تاریخ') }}</label>
                            <div class="col-md-8">
                                <input id="date" type="date" class="form-control @error('FlydateEN') is-invalid @enderror" name="date" 
                                
                                 value=@if(!empty($id)) "{{ $data->date  }}" @else "{{ old('date') }}" @endif 
                                 required autocomplete="FlydateEN">

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

             

    </div>
    <div class="col-sm">
         
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('جستجو    ') }}
                                </button>
                            </div>
                        </div>

    </div>
  </div>
</div>


</form>



                            </div>             
                        </div>  
                    </div>
                </div>
            </section>
    