<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Post;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Session\Store;

class PostController extends Controller
{

public function getIndex (Store $Session)
{
    $post = new Post();
    $posts = $post -> getPosts($Session);
    return view ('blog.welcome', ['posts' => $posts]);
}

    public function getAdminIndex (Store $Session)
    {
        $post = new Post();
        $posts = $post -> getPosts($Session);
        return view ('other.admin', ['posts' => $posts]);
    }

    public function getPost (Store $Session, $id)
    {
        $post = new Post();
        $post = $post->getPost($Session, $id);
        return view ('other.post', ['post' => $post]);
    }

    public function getAdminCreate ()
    {
        return view ('other.create');
    }

    public function getAdminEdit (Store $Session, $id)
    {
$post = new Post();
        $post = $post->getPost($Session, $id);
        return view ('other.edit', ['post' => $post, 'postId' => $id]);
    }

    public function postAdminCreate (Store $Session, Request $request) {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
$post = new Post();
$post = $post->addPost($Session, $request->input('title'), $request->input('content'));
        return redirect()->route('other.admin')->with('info', 'Post Created, title is : ' . $request->input('title'));
    }

    public function postAdminUpdate (Store $Session, Request $request) {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        $post = new Post();
        $post->editPost($Session, $request->input('id'), $request->input('title'), $request->input('content'));
        return redirect()->route('other.admin')->with('info', 'Post edited, new Title is: ' . $request->input('title'));
    }
}
