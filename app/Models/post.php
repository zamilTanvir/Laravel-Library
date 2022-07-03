<?php

namespace App;

class Post {

    public function getPosts ($Session) {
        if(!$Session->has('posts')) {
            $this->createDummyData($Session);
        }
        return $Session->get('posts');
    }

    public function getPost ($Session, $id) {
        if(!$Session->has('posts')) {
            $this->createDummyData($Session);
        }
        return $Session->get('posts')[$id];
    }

    public function addPost ($Session, $title, $content) {
        if(!$Session->has('posts')) {
            $this->createDummyData($Session);
        }
        $posts = $Session->get('posts');
        array_push($posts, ['title' => $title, 'content' => $content]);
        $Session->put('posts', $posts);
    }

    public function editPost ($Session, $id, $title, $content) {
        $posts = $Session->get('posts');
        $posts[$id] = ['title' => $title, 'content' => $content];
        $Session->put('posts', $posts);
    }

    private function createDummyData ($Session) {
        $posts = [
            [ 'title' => 'Learning Laravel',
                'content' => 'this blog post will right on track with laravel!' ],

            [ 'title' => 'Somthing else',
                'content' => 'Some other content!' ]
        ];
        $Session -> put('posts', $posts);
    }
}