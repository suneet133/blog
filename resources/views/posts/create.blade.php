@extends('layouts.master')
@section('content')
<div class="content">
	<h1>Write an Article?</h1>
</div>
@include('partials.errors')
<form method="post" action="/posts">
	{{csrf_field()}}
	<div class="field">
		<label class="label">Title</label>
		<p class="control">
			<input class="input" type="text" name="title" placeholder="Enter the title">
		</p>
	</div>
	<div class="field">
		<label class="label">Body</label>
		<p class="control">
			<textarea class="textarea" name="body" placeholder="You can start writing..."></textarea>
		</p>
	</div>
	<div class="field is-grouped">
		<p class="control">
			<button class="button is-primary" type="submit">Publish</button>
		</p>
	</form>
</div>
@endsection