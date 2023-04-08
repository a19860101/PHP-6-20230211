<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('post.index');
    }
    public function show(){
        return 'show';
    }
    public function create(){
        return view('post.create');
    }
    public function store(Request $request){
        return $request->all();
    }
    public function edit(){
        return 'edit';
    }
}
