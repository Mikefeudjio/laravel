<?php

namespace App\Http\Controllers;
use App\models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

      
        $posts = post::all();
        ($posts);

        return view('Article', [
            'posts' => $posts
        ]);
    }
    public function Show($id){

        $post = post::find($id);
       
        // $posts = [
        //     1 => 'mon titre numero un',
        //     2 => 'mon titre numero deux'
        // ];

       // $post = $posts[$id] ?? 'pas de titre' ;

        return view('Articles', [
            'post' => $post
        ]);

    }
    public function contact(){
        return view('contact');
    }


    public function create(){
        return view('form');
    }
    public function stor(Request $request)
    {
       // $posts =new posts();


    //     $posts->title = $request->title;
    //     $posts->content = $request->content;
    //     $posts->save();
     dd('post create');

    post::create([
        'title' -> $request->title,
        'content' -> $request->content
    ]);
    }
}
