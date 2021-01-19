@extends('layout')@section('title', 'Add New News')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New News</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{route('news.store')}}" method="post" class="pb-2" enctype="multipart/form-data">
                @include('news.form')
                <button type="submit" class="btn btn-primary">Add News</button>
            </form>
        </div>
    </div>
@endsection
