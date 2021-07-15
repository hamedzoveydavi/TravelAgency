@extends('layouts.adminpanel')
@section('content')


      <div class="col-lg-4 col-12">
			 	<div class="box-body">  
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">
					New Airline
				  </button>
				</div>
			</div>



      <table class="table table-bordered col-md-8 text-center">
    <thead  class="thead-dark">
        <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">Airline FA</th>
            <th scope="col" class="text-center">Airline EN</th>
            <th scope="col" class="text-center">Symbol</th>
            <th scope="col" class="text-center">logo</th>

			<th scope="col" class="text-center">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $Airlinelist)
        <tr>
            <th scope="row">{{$Airlinelist->id}}</th>
            <td>{{$Airlinelist->AirlineFA}}</td>
            <td>{{$Airlinelist->AirlineEN}}</td>
            <td>{{$Airlinelist->Symbol}}</td>
            <td><img class="avatar" src="../images/logo-dark.png" alt="..."></td>
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
					<h4 class="modal-title" id="myLargeModalLabel">Airline</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
						<div class="modal-body">              
								@component('components.Form.Airline.Airline',[
									
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