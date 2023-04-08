<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function test($id){
        // return view('about');
        return view('about',[
            'id' => $id,
            'msg' => 'hello about'
        ]);
    }
}
