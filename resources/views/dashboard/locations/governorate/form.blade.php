@extends('layouts.simple.master')
@section('title', 'Validation Forms')

@section('breadcrumb-title')
<h3>Governorate Form</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">Governorate Forms</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>ADD Governorate</h5>
				</div>
				<div class="card-body">
					<form class="needs-validation" novalidate="" method="POST" action="/store/governate" >
                        @csrf
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="validationCustom01">Slug</label>
								<input name="slug" class="form-control" id="validationCustom01" type="text" placeholder="Slug" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationCustom02"> Title</label>
								<input name="title" class="form-control" id="validationCustom02" type="text" placeholder="Title" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
                            <div class="col-md-4 mb-3">
								<label for="validationCustom01">ISO Code</label>
								<input name="iso_code_2" class="form-control" id="validationCustom01" type="text" placeholder="ISO-Code" required="">
								<div class="valid-feedback">Looks good!</div>
							</div>
                            <div class="mb-2">
                                <div class="col-form-label">Choose Country</div>
                                <select name="parent_id" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                                    @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->title}}</option>
                                    @endforeach
                                </select>
                            </div>
						<button class="btn btn-primary" type="submit">ADD GOVERNORATE</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection
