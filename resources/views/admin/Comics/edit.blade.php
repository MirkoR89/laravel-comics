@extends('layouts.dashboard')

@section('content')
@include('partials.errors')
<div class="container">
    <h2>Edit {{$comic->title}}</h2>
    
    <form class="form-group" action="{{ route('admin.comics.update', ['comic'=>$comic->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group my-4">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                value="{{$comic->title}}">
            <small id="helpId" class="form-text text-muted">Edit the title of comics</small>
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group my-4">
            <label for="dscription">Description</label>
            <textarea class="form-control" type="text" name="description" id="description" rows="10"
                aria-describedby="helpId">{{$comic->description}}</textarea>
            <small id="helpId" class="form-text text-muted">Edit the description of comics</small>
        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="Submit" class="btn btn-success">Submit</button>
@endsection