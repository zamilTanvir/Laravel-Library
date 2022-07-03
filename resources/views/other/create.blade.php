@extends('master.master')

@section('content')
    @include('partials.error')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('other.build') }}" method="post">
<div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>
                {{ csrf_field() }}
                <div><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button></div>
            </form>
        </div>
    </div>
@endsection