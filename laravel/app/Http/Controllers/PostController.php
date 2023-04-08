<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return 'index';
    }
    public function show(){
        return 'show';
    }
    public function create(){
        return 'create';
    }
    public function edit(){
        return 'edit';
    }
}
