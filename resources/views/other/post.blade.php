@extends('master.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="quote"> {{ $post['title'] }}</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p class="quote">{{ $post['content'] }}</p>
        </div>
    </div>
@endsection