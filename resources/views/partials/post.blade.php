<div class="box">
	<article class="media">
		<div class="media-left">
			<figure class="image is-64x64">
				<img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
			</figure>
		</div>
		<div class="media-content">
			<div class="content">
				<p>
					<strong>
					<a href="/posts/{{$post->id}}">
						{{$post->title}}
					</a>
					</strong>
					<small>
						by {{$post->user->name}}
					</small> 
					<small>{{$post->created_at->diffForHumans()}}</small>
					<br>
					{{str_limit($post->body, $limit = 150, $end = '...') }}
				</p>
			</div>
			<nav class="level is-mobile">
				<div class="level-left">
					<a class="level-item">
						<span class="icon is-small"><i class="fa fa-reply"></i></span>
					</a>
					<a class="level-item">
						<span class="icon is-small"><i class="fa fa-retweet"></i></span>
					</a>
					<a class="level-item">
						<span class="icon is-small"><i class="fa fa-heart"></i></span>
					</a>
				</div>
			</nav>
		</div>
	</article>
</div>