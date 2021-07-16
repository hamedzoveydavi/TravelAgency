@extends('layouts.adminpanel')
@section('content')






            <div class="col-lg-4 col-12">
			 	<div class="box-body">  
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">
					New Detail
				  </button>
				</div>
			</div>


            <table class="table table-bordered col-md-6 text-center">
    <thead  class="thead-dark">
        <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center" >Type</th>
            <th scope="col" class="text-center" >Class</th>
            <th scope="col" class="text-center" >Chair</th>
            <th scope="col" class="text-center">Edit</th>    
        </tr>
    </thead>
    <tbody >
        @foreach($data as $AircraftDetail)
        <tr >
            <th scope="row" class="text-center">{{$AircraftDetail->id}}</th>
            <th class="text-center">{{$AircraftDetail->Type_Name}}</th>
            <th class="text-center">{{$AircraftDetail->Class_Name}}</th>
            <th class="text-center">{{$AircraftDetail->Total_Chair}}</th>
              
			<td> 
                <button type="button" class="btn btn-rounded btn-sm btn-warning m-5">Edit</button>
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
					<h4 class="modal-title" id="myLargeModalLabel">Class</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
                                        <div class="modal-body">              
                                                @component('components.Form.Aircraft.AircraftDetail',[])     @endcomponent                     
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