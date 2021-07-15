@extends('layouts.adminpanel')
@section('content')


        <!-- Main content -->
         <section class="content">
            <div class="row">
				<div class="col-md-12 col-12">
					<div class="media bg-white b-1 border-success mb-20"  >
					  
					  <div class="media-body">
						<p><strong>  </strong><p class="float-right" >
						<span class="avatar status-success" class="float-left">
						<img class="avatar" src="../images/logo-dark.png" alt="...">
					  </span>	
						
						<p class="text-truncate">
						</p><b> شرکت  : </b> {{$data->CompanyName_FA}} </p>
						</p><b> Cpmpany  : </b> {{$data->CompanyName_EN}} </p>
						<br>	

						</p><b> مدیر عامل  : </b> {{$data->ManagerName_FA}} </p>
						</p><b> Manager  : </b> {{$data->ManagerName_EN}} </p>	
						<br>

						</p><b> شماره ثبت  : </b> {{$data->Register_No}} </p>
						</p><b> Register No  : </b> {{$data->Register_No}} </p>	
						<br>

						</p><b> پست الکترونیک : </b> {{$data->Company_Email}} </p>
						</p><b> Email  : </b> {{$data->Company_Email}} </p>	
						<br>

						</p><b> آدرس : </b> {{$data->Company_Address}} </p>
						</p><b> Address  : </b> {{$data->Company_Address}} </p>	
						<br>


						</p><b> تلفن تماس : </b> {{$data->Tel}} </p>
						</p><b> Tel  : </b> {{$data->Tel}} </p>	
						<br>


						</p><b> نمابر : </b> {{$data->Fax}} </p>
						</p><b> Fax  : </b> {{$data->Fax}} </p>	
						<br>
						
						
							<div class="d-inline-block pull-right mt-10">
									<button type="button" class="btn btn-rounded btn-sm btn-warning m-5" data-toggle="modal" data-target="#edit">Edit</button>
									<button type="button" class="btn btn-rounded btn-sm btn-info m-5" data-toggle="modal" data-target=".bs-example-modal-lg">New</button>
							</div>
					  </div>
					</div>				
				</div>	
			</div>
       
		</section>


		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">Company</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
						<div class="modal-body">              
								@component('components.Form.Company.company',[
									
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

  <div class="modal fade bs-example-modal-lg" id="edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myLargeModalLabel">Company</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
						<div class="modal-body">              
								@component('components.Form.Company.company',[
									'id'=>$data->id
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