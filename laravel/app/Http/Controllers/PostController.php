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
    public function show($id){
        // $post = DB::select('SELECT * FROM posts WHERE id = ?',[$id]);
        $post = DB::table('posts')->find($id);
        // return view('post.show',compact('post'));
        return view('post.show',compact('post'));
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
    public function edit($id){
        $post = DB::table('posts')->find($id);
        return view('post.edit',compact('post'));
    }
    public function update(Request $request,$id){
        // DB::update('UPDATE posts SET title=?,content=?,updated_at=? WHERE id = ?',[
        //     $request->title,
        //     $request->content,
        //     now(),
        //     $id
        // ]);
        DB::table('posts')->where('id',$id)->update([
            'title'     => $request->title,
            'content'   => $request->content,
            'created_at'=> now(),
        ]);
        return redirect('/post');
    }
    public function destroy($id){
        // DB::delete('DELETE FROM posts WHERE id = ?',[$id]);
        DB::table('posts')->delete($id);
        return redirect('/post');
    }
}
