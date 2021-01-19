@extends('layout')@section('title', 'Service List')
@section('content')

    <div class="row">
        <div class="col-12">
            <h1>Service</h1>
            <p><a href="services/create">Add New Service</a></p>
        </div>
    </div>

    @foreach($services as $service)
        <div class="row">
            <div class="col-2">{{$service->id}}</div>
            <div class="col-2">
                <a href="/services/{{$service->id}}">{{$service->name}}</a>
            </div>
            <div class="col-4">{{$service->description}}</div>
            <div class="col-4">{{$service->body}}</div>
            <hr>
        </div>
    @endforeach
@endsection
