<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getPostForm() {
        return view('post/post_form');
    }

    public function createPost(Request $request){
        $post = Post::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'author' => Auth::user()->id
        ));
        return redirect()->route('home')->with('success', 'Post has been successfully added!');
    }

    public static function getPosts(){
        $users = DB::select('select *  from posts');
        return view('post/post_view',['users'=>$users]);
        }
    
}