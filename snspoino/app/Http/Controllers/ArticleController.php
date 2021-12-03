<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Article::class, 'article');
    }
    
    public function index()
    {
        $articles = Article::all()->sortByDesc('created_at');

        return view('articles.index', ['articles' => $articles]);
    }
    
    public function create()
    {
        return view('articles.create');
    }
    
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }
    
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }
    
    public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all()); //-- この行を追加
        $article->user_id = $request->user()->id;
        $article->save();
        return redirect()->route('articles.index');
    }
}
