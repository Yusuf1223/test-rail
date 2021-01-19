@extends('layout')@section('title', 'Edit Details for'.$news->name)
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Details for {{$news->name}}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{route('news.update', $news->id)}}" method="POST" class="pb-2" enctype="multipart/form-data">
                @method('put')
                @include('news.form')

                <button type="submit" class="btn btn-primary">Save News</button>
            </form>
        </div>
    </div>
@endsection
