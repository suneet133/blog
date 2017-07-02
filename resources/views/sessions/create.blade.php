@extends('layouts.auth')
@section('content')
<div class="column is-4 is-offset-4">
	<h1 class="title">
	Login
	</h1>
	<form method="post" action="/login">
		{{csrf_field()}}
		<div class="box">
			
			<label class="label">Email</label>
			<p class="control">
				<input class="input" name="email" type="email" placeholder="Enter your email">
			</p>
			<br>
			<label class="label">Password</label>
			<p class="control">
				<input class="input" name="password" type="password" placeholder="●●●●●●●">
			</p>
			<hr>
			@include('partials.errors');
			<p class="control">
				<button type="submit" class="button is-primary">Login</button>
				<a href="/" class="button is-default">Cancel</a>
			</p>
		</div>
	</form>
	<p class="has-text-centered">
		<a href="/register">Register</a>
		|
		<a href="#">Need help?</a>
	</p>
</div>
@endsection