@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>{{$comic->title}}</h2>
        <p>{{$comic->description}}</p>
        <img src="{{ asset('storage/' . $comic->cover ) }}" alt="cover">
    </div>
@endsection