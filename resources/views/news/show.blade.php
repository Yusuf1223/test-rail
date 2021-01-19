@extends('layout')@section('title', 'Details for '.$news->name)
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{$news->name}}</h1>
            <p><a href="/news/{{$news->id}}/edit">Edit</a></p>
            <form action="/news/{{$news->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name: </strong>{{$news->name}}</p>
            <p><strong>Body: </strong>{{$news->body}}</p>
            <p><strong>Link: </strong><a href="google.com">{{$news->link}}</a></p>
            @if($news->image()->exists())
                <div class="row">
                    <div class="col-12"><img src="/storage{{$news->image->url}}" alt="" class="img-thumbnail"></div>
                </div>
            @endif

        </div>
    </div>

@endsection
