@extends('project.index')
@section('content')
<form method="post" action="{{ url('admin/faq/'.$item->id) }}" class="custom_div_1" enctype="multipart/form-data">
	@csrf
	@method('put')
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>question</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" value="{{ $item->question }}" name="question" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>answer</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" value="{{ $item->answer }}" name="answer" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>order_number</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="order_number" value="{{ $item->order_number }}" required="required" class="form-control" style="width: 100%;">
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-3 d-inline-block">
				<strong>extra field</strong>
			</div>
			<div class="col-xs-9 d-inline-block">
				<input type="text" name="extra_field" value="{{ $item->extra_field }}" class="form-control" style="width: 100%;">
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