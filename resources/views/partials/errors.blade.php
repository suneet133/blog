<div class="field">
		@if(count($errors))
	<p class="control">
	{{$c=0}}
			@foreach($errors->all() as $error)
				<div class="notification is-warning">
					<button class="delete"></button>
					{{$error}}
				</div>
		@endforeach
	</p>
	@endif
</div>

