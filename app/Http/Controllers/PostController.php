<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends BaseController
{

    public function index()
    {
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }

    static public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => ''
        ]);
        $this->service->store($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('post.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'name' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);

        $this->service->update($data, $post);

        return redirect()->route('post.show', $post->id);
    }
}
