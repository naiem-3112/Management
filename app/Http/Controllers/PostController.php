<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.list', compact('posts'));
    }

    public function create()
    {
        return view('post.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'writer' => 'required',
            'body' => 'required',
            'tag' => 'required'
        ]);
        $post = Post::create($request->all());
        $post->save();
        return redirect('post/list');

    }

    public function edit($id)
    {
        $postEdit = Post::findOrfail($id);
        return view('post.edit', compact('postEdit'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'writer' => 'required',
            'body' => 'required',
            'tag' => 'required'
        ]);
        $updatePost = Post::find($id);
        $updatePost->title = $request->title;
        $updatePost->writer = $request->writer;
        $updatePost->body = $request->body;
        $updatePost->tag = $request->tag;
        $updatePost->save();
        return redirect('post/list');
    }

    public function delete($id)
    {
        $postDelete = Post::findOrfail($id);
        $postDelete->delete();
        return redirect('post/list');

    }

}
