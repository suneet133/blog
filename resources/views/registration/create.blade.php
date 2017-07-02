@extends('layouts.auth')
@section('content')
<div class="column is-4 is-offset-4">
	<h1 class="title">
	Register an Account
	</h1>
	<form method="post" action="/register">
		{{csrf_field()}}
		<div class="box">
			<label class="label">Name</label>
			<p class="control">
				<input class="input" name="name" type="text" placeholder="Enter your name">
			</p>
			<label class="label">Email</label>
			<p class="control">
				<input class="input" name="email" type="email" placeholder="Enter your email">
			</p>
			<hr>
			<label class="label">Password</label>
			<p class="control">
				<input class="input" name="password" type="password" placeholder="●●●●●●●">
			</p>
			<label class="label">Confirm Password</label>
			<p class="control">
				<input class="input" name="password_confirmation" type="password" placeholder="●●●●●●●">
			</p>
			<hr>
			@include('partials.errors');
			<p class="control">
				<button type="submit" class="button is-primary">Register</button>
				<a href="/" class="button is-default">Cancel</a>
			</p>
		</div>
	</form>
	<p class="has-text-centered">
		<a href="/login">Login</a>
		|
		<a href="#">Need help?</a>
	</p>
</div>
@endsection