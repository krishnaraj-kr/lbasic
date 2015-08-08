@extends('layout.app')

@section('title', 'Edit Article')

@section('content')
	<h1>Edit article: {$article->title]}</h1>
	<hr/>

	{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
		@include('articles._form', ['submitButtonText' => 'Add Article'])
	{!! Form::close() !!}

	@include('errors._list')
@stop