<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = [
            'titre' => 'mon premier super titre',
            'titre2' => 'mon second super titre'
        ];
        return view('Article', [
            'posts' => $posts
        ]);
    }
    public function Show($id){
        $posts = [
            1 => 'mon titre numero un',
            2 => 'mon titre numero deux'
        ];

        $post = $posts[$id] ?? 'pas de titre' ;

        return view('Articles', [
            'post' => $post
        ]);

    }
    public function contact(){
        return view('contact');
    }
}
