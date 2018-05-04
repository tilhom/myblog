@extends('layout.blank')

@section('content')
<div class="col-md-8">
	<h1>Log In</h1>
	<hr>
	<form method="POST" action="/login">
		{{csrf_field()}}
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="" value="{{session('email')}}" required>
		</div>		
		<div class="form-group">
			<label for="title">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="" required>
		</div>
		@include('layout.messages')
		<p>
			<button type="submit" class="btn btn-primary">Register</button>
		</p>
	</form>
</div>
@endsection

