@extends('layout')@section('title', 'Details for '.$service->name)
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Details for {{$service->name}}</h1>
            <p><a href="/services/{{$service->id}}/edit">Edit</a></p>
            <form action="/services/{{$service->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Name: </strong>{{$service->name}}</p>
            <p><strong>Description: </strong>{{$service->description}}</p>
            <p><strong>Body: </strong>{{$service->body}}</p>
            @if($service->image()->exists())
                <div class="row">
                    <div class="col-12"><img src="/storage{{$service->image->url}}" alt="" class="img-thumbnail"></div>
                </div>
            @endif

        </div>
    </div>

@endsection
