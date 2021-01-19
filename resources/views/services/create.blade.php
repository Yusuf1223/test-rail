@extends('layout')@section('title', 'Add New Costumer')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add New Costumer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{route('services.store')}}" method="post" class="pb-2" enctype="multipart/form-data">
                @include('services.form')
                <button type="submit" class="btn btn-primary">Add Costumer</button>
            </form>
        </div>
    </div>
@endsection
