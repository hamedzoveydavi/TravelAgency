@extends('layouts.adminpanel')
@section('content')


      <div class="col-lg-4 col-12">
			 	<div class="box-body">  
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">
					New Fly Program
				  </button>
				</div>
			</div>
     
      <table class="table table-bordered col-md-10 text-center">
    <thead  class="thead-dark">
        <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">FlyType</th>
            <th scope="col" class="text-center">date</th>
            <th scope="col" class="text-center">Airlines</th>
            <th scope="col" class="text-center">Route</th>
            <th scope="col" class="text-center">Aircraf</th>
            <th scope="col" class="text-center">FlyNo</th>
            <th scope="col" class="text-center">Price (Rial)</th>
           
            {{--<th scope="col" class="text-center">FlyTime_at</th>
            <th scope="col" class="text-center">DepartureTime_at</th>
            <th scope="col" class="text-center">ArrivalTimeLocal_at</th>--}}
            <th scope="col" class="text-center">Seat avilable</th>
            {{--<th scope="col" class="text-center">Status</th>--}}
       			<th scope="col" class="text-center">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $list)
        <tr>
            <th scope="row">{{$list->id}}</th>
            <td>@if($list->FlyType == 1)Departure @elseif($list->FlyType == 2) Arrival @endif</td>
            <td>
                {{$list->FlydateFA}} <br>
                {{$list->FlydateEN}} 
            </td>
            <td>{{$list->Symbol}}</td>
            <td> {{$list->Source_Symbol}}-{{$list->Destination_Symbol}} </td>
           <td>{{$list->Type_Name}}/{{$list->Class_Name}}</td>
            <td>{{$list->FlyNo}}</td>
            <td>{{number_format($list->Price)}}</td>
            
            {{--<td>{{$list->FlyTime_at}}</td>
            <td>{{$list->DepartureTime_at}}</td>
            <td>{{$list->ArrivalTimeLocal_at}}</td>--}}
            <td>{{$list->Chair_avilable}}</td>
            {{--<td>{{$list->Status}}</td>--}}
			<td> 
			<a type="button" class="btn btn-rounded btn-sm btn-warning m-5" >Edit</a>
			<button type="button" class="btn btn-rounded btn-sm btn-danger m-5">Delete</button>


			</td>
         </tr>
        @endforeach
    </tbody>
</table>




<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">Fly Program</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
						<div class="modal-body">              
								@component('components.Form.Ticketing.FlyProgram',[
									
									])     @endcomponent                     
						</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-rounded text-left" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
  <!-- /.modal -->



  @endsection