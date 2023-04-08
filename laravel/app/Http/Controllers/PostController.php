<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    //
    public function index(){
        // $data = DB::select('SELECT * FROM posts');
        $data = DB::table('posts')->get();
        return view('post.index',compact('data'));
    }
    public function show(){
        return 'show';
    }
    public function create(){
        return view('post.create');
    }
    public function store(Request $request){
        // DB::insert('INSERT INTO posts(title,content,created_at)VALUES(?,?,?)',[
        //     $request->title,
        //     $request->content,
        //     now()
        // ]);
        DB::table('posts')->insert([
            'title'     => $request->title,
            'content'   => $request->content,
            'created_at'=> now()
        ]);

        return redirect('/post');
    }
    public function edit(){
        return 'edit';
    }
}
