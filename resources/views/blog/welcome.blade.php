@extends('master.master')

@section('content')
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="post-title">{{ $post['title'] }}</h1>
            <h4 class="quote">{{ $post['content'] }}</h4>
            <a href="{{ route('other.post', ['id' => array_search($post, $posts)]) }} " class="btn btn-success">...see more</a>
        </div>
    </div>
    <hr>
    @endforeach
@endsection