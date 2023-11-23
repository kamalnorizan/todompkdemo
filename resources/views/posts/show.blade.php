@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{$post->title}} ~ <small><i>{{$post->user->name}}</i></small>
                </div>
                <div class="card-body">
                   {{$post->content}}
                </div>
            </div>
            @foreach ($post->comments as $comment)
            <hr>
            <b>{{$comment->user->name}}</b><br>
            <small><i>{{$comment->created_at}}</i></small><br>
            {{$comment->comment}}
            @endforeach
        </div>
    </div>
</div>
@endsection

