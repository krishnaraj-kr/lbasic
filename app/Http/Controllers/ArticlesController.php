<?php

namespace wonders\Http\Controllers;
//To import article class 
use wonders\Article;

//use Request;
use Carbon\Carbon;
use wonders\Http\Requests\ArticleRequest;

use wonders\Http\Requests;
use wonders\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //List all articles
    public function index()
    {
    	//$articles = Article::all();
        $articles = Article::latest('published_at')->get(); //Article::order_by('published_at', 'desc')->get();
    	return view('articles.index', compact('articles'));
    }

    //Show a article
    public function show($id)
    {
    	$article = Article::findOrFail($id);
        //dd($article); To console the result in browser
        /*if(is_null($article)) {
            abort(404);
        }*/
    	return view('articles.show', compact('article'));
    }

    //Create article
    public function create()
    {
        return view('articles.create');

    }

    //Create Store
    public function store(ArticleRequest $request)
    {
        //$input = Request::all();
        //$input['published_at'] = Carbon::now();
        Article::create($request->all());
        return redirect('articles');
    }

    //Edit Aricle
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
    //Update Article 
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return redirect('articles');
    }


}
