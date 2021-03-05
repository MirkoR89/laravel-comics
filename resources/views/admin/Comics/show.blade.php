@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h2>{{$comic->title}}</h2>
        <p>{{$comic->description}}</p>
    </div>
@endsection