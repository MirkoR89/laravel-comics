@extends('layouts.dashboard')

@section('content')
@include('partials.errors')
<div class="container">
    <h2>Add a new comics</h2>
    
    <form class="form-group" action="{{ route('admin.comics.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        {{-- Input title --}}
        <div class="form-group my-4">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                placeholder="Text the title of comics">
            <small id="helpId" class="form-text text-muted">Text the title of comics</small>
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Input description --}}
        <div class="form-group my-4">
            <label for="dscription">Description</label>
            <textarea class="form-control" type="text" name="description" id="description" rows="10"
                aria-describedby="helpId" placeholder="Description"></textarea>
            <small id="helpId" class="form-text text-muted">Text the description of comics</small>
        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
          <label for="cover">Cover</label>
          <input type="file" name="cover" id="cover" class="form-control-file" placeholder="Add cover comics" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Add cover image fot the current comics</small>
        </div>
        @error('cover')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- <div class="form-group my-4">
            <label for="on_sale_date">On sale date</label>
            <input type="date" id="date" name="date">
            <small id="helpId" class="form-text text-muted">Add the date of sale</small>
        </div>

        <div class="form-group my-4">
            <label for="price">Us Price </label>
            <input type="number" id="price" name="price" placeholder="$"
            min="0,1" max="99">
            <small id="helpId" class="form-text text-muted">Add the price of comics</small>
        </div>

        <div class="form-group my-4">
            <label for="volume_issue">Volume</label>
            <input type="number" id="volume" name="volume"
            min="0" max="999">
            <small id="helpId" class="form-text text-muted">Add the number of volume</small>
        </div> --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
