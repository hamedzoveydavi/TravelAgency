            
@extends('layouts.adminpanel')
@section('content')

             
            <div class="col-md-6 col-12">
					<div class="media bg-white mb-20">
					  <span class="avatar status-success">
						<img class="avatar" src="../images/avatar.png" alt="...">
					  </span>
					  <div class="media-body">
						<p><strong>Johen Doe</strong> <time class="float-right" datetime="2017-07-14 20:00">24 min ago</time></p>
						<p>Donec vitae laoreet neque, id convallis ante.</p>
						<div class="d-inline-block pull-right mt-10">
						  <button type="button" class="btn btn-rounded btn-sm btn-success m-5">Approve</button>
						  <button type="button" class="btn btn-rounded btn-sm btn-danger m-5">Delete</button>
						</div>
					  </div>
					</div>				
				</div>	


@endsection