@extends('layouts.master')
@section('content')

@foreach($posts as $post)
	@include('partials.post')
@endforeach
@endsection