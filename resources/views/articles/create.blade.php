@extends('layout.app')

@section('title', 'Create Article')

@section('content')
	<h1>Write a new article</h1>
	<hr/>

	{!! Form::open(['url' => 'articles']) !!}
		@include ('articles._form', ['submitButtonText' => 'Add Article'])
	{!! Form::close() !!}

	@include ('errors._list')
@stop