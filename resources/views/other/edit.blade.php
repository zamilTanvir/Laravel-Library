@extends('master.master')

@section('content')
   @include('partials.error')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('other.update') }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post['title'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{ $post['content'] }}">
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $postId }}">
                <div><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button></div>
            </form>
        </div>
    </div>
@endsection

