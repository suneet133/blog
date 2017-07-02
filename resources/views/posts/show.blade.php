@extends('layouts.master')
@section('content')
<div class="content">
	<h1>{{$post->title}}</h1>
	
	<h6><i class="fa fa-clock-o" aria-hidden="true"></i> {{$post->created_at->toFormattedDateString()}}
	</h6>
	<hr>
	<p>{{$post->body}}</p>
</div>
<hr>
@foreach($post->comments as $comment)
<article class="media">
	<figure class="media-left">
		<p class="image is-64x64">
			<img src="http://bulma.io/images/placeholders/128x128.png">
		</p>
	</figure>
	<div class="media-content">
		<div class="content">
			<p>
				<strong>Anonymous</strong>
				<br>
				{{$comment->body}}
				<br>
				<small><a>Like</a> · <a>Reply</a> · {{$comment->created_at->diffForHumans()}}</small>
			</p>
		</div>
	</div>
</article>
@endforeach
<article class="media">
	<figure class="media-left">
		<p class="image is-64x64">
			<img src="http://bulma.io/images/placeholders/128x128.png">
		</p>
	</figure>
	<div class="media-content">
		<form method="post" action="/posts/{{$post->id}}/comments">
		{{csrf_field()}}
			<div class="field">
				<p class="control">
					<textarea name="body" class="textarea" placeholder="Add a comment..."></textarea>
				</p>
			</div>
			@include('partials.errors')
			<div class="field">
				<p class="control">
					<button type="submit" class="button">Post comment</button>
				</p>
			</div>
		</form>
	</div>
</article>
@endsection