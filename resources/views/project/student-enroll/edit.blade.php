@extends('project.index')
@section('content')
<form method="post" action="{{ url('admin/student-enroll/'.$item->id) }}" class="custom_div_1" enctype="multipart/form-data">
	@csrf
	@method('put')
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>Name</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" value="{{ $item->name }}" name="name" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>phone_number</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" value="{{ $item->phone_number }}" name="phone_number" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>email</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="email" value="{{ $item->email }}" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>city</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="city" value="{{ $item->city }}" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>address</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="address" value="{{ $item->address }}" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>current_edu</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="current_edu" value="{{ $item->current_edu }}" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>profession</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="profession" value="{{ $item->profession }}" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>reason</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="reason" value="{{ $item->reason }}" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row from-group">
		<div class="col-xs-12">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</div>
</form>
@endsection