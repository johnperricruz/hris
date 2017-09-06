@extends('includes.admin-template')
	@section('content')
		@include('includes/breadcrumbs')
			<!-- START CONTAINER -->
			@include('includes/flash-message')
			<div class="container-widget">
				<a href="<?php echo url('admin/departments'); ?>" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back to list</a>
					<p></p>
					<div class="panel panel-default">
						<div class="panel-title">
						  <ul class="panel-tools">
							<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
						  </ul>
						</div>
						<div class="panel-body">
							<form id="edit-department" class="form-horizontal" action="<?php echo url('admin/process/edit-department'); ?>" method="post">
								{{ method_field('PUT') }}
								{{ csrf_field() }} 			
								<input name="department_id" value="<?php echo $department->department_id; ?>" type="hidden" required  />								
								<div class="form-group">
								  <div class="col-sm-12">
								    <label class="control-label form-label">Department Name</label>
									<input value="<?php echo $department->department_name; ?>" placeholder="Department Name" type="text" class="form-control" id="department_name" name="department_name" required  />
								  </div>
								  <div class="col-sm-12">
									<label class="control-label form-label">Department Desc</label><br/>
									<textarea placeholder="Department Desc" type="text" class="form-control" id="department_desc" name="department_desc"><?php echo $department->department_desc; ?></textarea>								
								  </div>
								</div>
								<hr/>
								<div class="form-group"> 
								  <div class="col-sm-12 text-right">
									<button type="submit" class="btn btn-default">Submit</button>
								  </div>
								</div>
							</form>
						</div>
					</div>
					
			</div>
			<!-- END CONTAINER -->
			<!-- //////////////////////////////////////////////////////////////////////////// -->
		@stop
		