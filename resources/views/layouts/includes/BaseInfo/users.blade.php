       
@extends('layouts.adminpanel')
@section('content')


			<div class="col-lg-4 col-12">
			 	<div class="box-body">  
				  <button type="button" class="btn btn-rounded btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">
					New User
				  </button>
				</div>
			</div>



                <!-- Main content -->
                <section class="content">

        @foreach($data as $users)
                        <div class="row">
				<div class="col-md-10 col-12">
					<div class="media bg-white b-1 border-success mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar2.png" alt="...">
					  </span>
					  <div class="media-body">
						<p><strong>{{$users->name}}</strong><p class="float-right" ><b> آژانس : </b> {{$users->SubAgency_NameFA}} </p> </p>
						<p class="text-truncate"><b>سمت : </b> {{$users->Position_Name}} <p> <b>ایمیل : </b> {{$users->email}}  </p> </p>
							<div class="d-inline-block pull-right mt-10">
									<button type="button" class="btn btn-rounded btn-sm btn-warning m-5">Edit</button>
									<button type="button" class="btn btn-rounded btn-sm btn-danger m-5">Inactive</button>
									<button type="button" class="btn btn-rounded btn-sm btn-info m-5">Change Password</button>
							</div>
					  </div>
					</div>				
				</div>	
			</div>
        @endforeach
		</section>
		<!-- /.content -->
        {{$data->links()}}


	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">Register</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
                                        <div class="modal-body">              
                                               @component('components.Form.Register-Form.register',[])     @endcomponent                    
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