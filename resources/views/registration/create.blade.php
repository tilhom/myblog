@extends('layout.blank')

@section('content')
<div class="col-md-8 blog-main">
	<h1>Registration</h1>
	<form method="POST" action="/register">
		{{csrf_field()}}
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" name="name" placeholder="" required>
		</div>		
		<div class="form-group">
			<label for="name">Email</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="" required>
		</div>
		<div class="form-group">
			<label for="title">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="" required>
		</div>
		<div class="form-group">
			<label for="title">Password Confirmation</label>
			<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="" required>
		</div>
		@include('layout.messages')
		<p>
			<button type="submit" class="btn btn-primary">Register</button>
		</p>
	</form>
</div>
@endsection