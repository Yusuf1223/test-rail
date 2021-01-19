@extends('layout')@section('title', 'Edit Details for'.$service->name)
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{$service->name}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{route('services.update', $service->id)}}" method="POST" class="pb-2" enctype="multipart/form-data">
                @method('put')
                @include('services.form')

                <button type="submit" class="btn btn-primary">Save Costumer</button>
            </form>
        </div>
    </div>
@endsection
