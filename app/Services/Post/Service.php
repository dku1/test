<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{

    public function store($data)
    {
        $post = Post::create($data);
    }

    public function update($data, $post)
    {
        $post->update($data);
    }

}
