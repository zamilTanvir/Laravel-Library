@extends('master.master')

@section('content')
    <div class="row">
        <div class="col-md-18">
            <h1 class="post-title">About</h1>
            @if(FALSE)
                <p>True</p>
            @else
                <p>False</p>
            @endif
            <hr>
            @for($i=0; $i < 5; $i++)
                <p>{{$i}}. About this page</p>
            @endfor
            <hr>
            {!!"<script>alert('about');</script"!!}
        </div>
    </div>
@endsection
