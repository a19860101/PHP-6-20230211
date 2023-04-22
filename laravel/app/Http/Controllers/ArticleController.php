<?php

namespace App\Http\Controllers;

use App\Models\Article;
// use App\Article;
use App\Models\Category;
// use App\Category;
use Illuminate\Http\Request;

use Auth;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $articles = Article::all();
        $articles = Article::orderBy('id','DESC')->get();
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $categories = Category::get();
        $categories = \App\Models\Category::get();
        return view('article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return $request->file('cover')->store('images','public');
        return $request->file('cover')->storeAs('images','test','public');

        // 驗證 validate

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);


        // 方法一
        // $article = new Article;
        // $article->title = $request->title;
        // $article->content = $request->content;
        // $article->save();

        // 方法二
        // $article = new Article;
        // $article->fill([
        //     'title'     => $request->title,
        //     'content'   => $request->content
        // ]);
        // $article->save();

        // 方法三
        $article = new Article;
        $article->fill($request->all());
        $article->user_id = Auth::id();

        $article->save();

        // 方法四
        // Article::create($request->all());

        // return redirect('/article');
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        return view('article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        $categories = \App\Models\Category::get();
        return view('article.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        // 驗證 validate

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $article->fill($request->all());
        $article->save();

        return redirect()->route('article.show',compact('article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $article->delete();
        // Article::destroy($article->id);

        return redirect()->route('article.index');

    }
}
