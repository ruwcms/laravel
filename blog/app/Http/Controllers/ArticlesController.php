<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        //Shows a list of resources
        $articles = Article::paginate(3);

        return view("articles.index", [
            "articles"=>$articles
        ]);
    }

    public function show(Article $article)
    {
        // Shows a single resource
       // $article = Article::findorfail($articleId);
        return view("articles.show", [
            "article"=>$article
        ]);

    }

    public function create()
    {
        // Shows a view to create a new resource

        return view("articles.create", [

        ]);
    }

    public function store()
    {
        // Persists the resource

        request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');

    }

    public function edit(Article $article)
    {

        //show a form to edit an exsisting resource

        return view("articles.edit", [
            "article"=>$article
        ]);
    }

    public function update(Article $article)
    {
        // Persist the edited resource

        request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();
        return redirect('/articles/'. $article->id);
    }

    public function destroy()
    {
        // Delete a resource
    }

}
