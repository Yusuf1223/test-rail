@extends('layout')@section('title', 'News List')
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>News</h1>
            <p><a href="news/create">Add New News</a></p>
        </div>
    </div>

    @foreach($news as $new)
        <div class="row">
            <div class="col-2">{{$new->id}}</div>
            <div class="col-2">
                <a href="/news/{{$new->id}}">{{$new->name}}</a>
            </div>
            <div class="col-4">{{$new->body}}</div>
            <div class="col-4">{{$new->link}}</div>
            <hr>
        </div>
    @endforeach
@endsection
