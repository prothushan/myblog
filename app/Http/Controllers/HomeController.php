<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$post = null;  or: $post = (object) ['title' => '', 'description' => ''];
        return view('home');
    }

    public function allPosts()
    {
        $posts = Post::where('user_id', auth()->user()->id)->get();
        return view('posts.all-posts',compact('posts'));
    }
}
