<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article/index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('article/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $img = null;
        if($request->file('img')){
            $img = $request->file('img')->store('img', 'public');
        }

        Article::create([
            'title'=> $request->title,
            'price'=> $request->price,
            'typology'=> $request->typology,
            'body'=> $request->body,
            'img'=> $img,
            'user_id'=> Auth::user()->id
        ]);

        return redirect(route('article.index'))->with('message', 'Articolo creato correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article/show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article/edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        
        if($request->file('img')){

            // elimino l'immagine vecchia caricata prima di inserire quella nuova
            Storage::disk('public')->delete($article->img);
            $img= $request->file('img')->store('img', 'public');
        }else{
            $img= $article->img;
        }

        $article->update([
            'title'=> $request->title,
            'price'=> $request->price,
            'typology'=> $request->typology,
            'body'=> $request->body,
            'img'=> $img
        ]);

        return redirect(route('article.index'))->with('message', 'Articolo modificato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('article.index'))->with('message', 'Articolo eliminato');
    }
}
