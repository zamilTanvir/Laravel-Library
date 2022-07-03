@extends('master.master')

@section('content')
    <h1 class="post-title">My Blog</h1>
    @if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-success"> {{ Session::get('info') }} </p>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('other.create') }} " class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12">
            <p><strong>{{ $post['title'] }}</strong></p><a href="{{ route('other.edit', ['id' => array_search($post, $posts)]) }} ">edit</a>
        </div>
    </div>
    @endforeach
@endsection