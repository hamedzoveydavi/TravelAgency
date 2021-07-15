@extends('layouts.adminpanel')
@section('content')

            <div class="col-lg-4 col-12">
			 	<div class="box-body">  
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">
					New Agancy
				  </button>
				</div>
			</div>


<table class="table table-bordered col-md-12">
    <thead  class="thead-dark">
        <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">Agency</th>
            <th scope="col" class="text-center">ManagerName</th>
            <th scope="col" class="text-center">RegisterNo</th>
            <th scope="col" class="text-center">Email</th>
            <th scope="col" class="text-center">Address</th>
            <th scope="col" class="text-center">Logo</th>
            <th scope="col" class="text-center">Tel</th>
            <th scope="col" class="text-center">Fax</th>
			<th scope="col" class="text-center">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $Agency)
        <tr>
            <th scope="row">{{$Agency->id}}</th>
            <td>{{$Agency->SubAgency_NameFA}} {{$Agency->SubAgency_NameEN}}</td>
            <td>{{$Agency->SubAgency_ManagerNameFA}}  {{$Agency->SubAgency_ManagerNameEN}} </td>
            <td>{{$Agency->SubAgency_RegisterNo}} </td>
            <td>{{$Agency->SubAgency_Email}} </td>
            <td>{{$Agency->SubAgency_Address}} </td>
            <td>{{$Agency->SubAgency_Logo}} </td>
            <td>{{$Agency->SubAgency_Tel}} </td>
            <td>{{$Agency->SubAgency_Fax}} </td>
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
					<h4 class="modal-title" id="myLargeModalLabel">Agancy</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
                                        <div class="modal-body">              
                                                @component('components.Form.Agency.Agency',[])     @endcomponent                     
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