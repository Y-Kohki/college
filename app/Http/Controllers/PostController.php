<?php

namespace App\Http\Controllers;

use App\Post;
 dev_basis06
use App\Http\Requests\PostRequest; // useする
=======
 dev_basis05
use App\Http\Requests\PostRequest; // useする
=======
 dev_basis04
use App\Http\Requests\PostRequest; // useする
=======
use Illuminate\Http\Request;
 master
 master
 master

class PostController extends Controller
{
    public function index(Post $post)
    {
 dev_basis06
=======
 dev_basis05
=======
 dev_basis04
 master
 master
        return view('posts/index')->with(['posts' => $post->getPaginate()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts/create');
    }

    public function store(Post $post, PostRequest $request) // 引数をRequest->PostRequestにする
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
 dev_basis06
=======
 dev_basis05
 master
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
 dev_basis06
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
=======
}
=======
}
=======
 dev_basis03
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }
   
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    } 
=======
 dev_basis02
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
=======
        return $post->get();
 master
    }
 master
}
 master
 master
 master
