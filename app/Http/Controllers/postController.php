<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    public function store(Request $request)
    {
        Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);

        return redirect()->route('home')->with('success', 'Post created successfully!');
    }

    public function show($postId)
    {
        $post = Post::find($postId);
        return view('posts.show', compact('post'));
    }

    public function edit($postId)
    {
        $post = Post::findOrFail($postId);
        return view('home', compact('post'));
    }

    public function delete($postId)
    {
        $post = Post::findOrFail($postId);
        $post->delete();
        return redirect()->route('posts.all')->with('success', 'Post deleted successfully!');
    }
    

    
    
}
