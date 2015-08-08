@extends('layout.app')

@section('content')
	<h1>Articles</h1>
	<hr />

	@forelse ($articles as $article)
		<article>
			<h2>
				<a href="{{action('ArticlesController@show', [$article->id])}}">{{ $article->title }}</a>
			</h2>
			<div class="body">{{ $article->body }}</div>
		</article>
	@empty
    	<p>No articles to display.</p>
	@endforelse

@stop


<!-- other option to display

@unless($articles->count())
    // Content if there are no articles.
    <p>No articles to display.</p>
@else
    // We have articles.
    @foreach($articles as $article)
	    <article>
			<h2>
				<a href="{{action('ArticlesController@show', [$article->id])}}">{{ $article->tittle }}</a>
			</h2>
			<div class="body">{{ $article->body }}</div>
		</article>
	@endforeach
@endunless
 -->