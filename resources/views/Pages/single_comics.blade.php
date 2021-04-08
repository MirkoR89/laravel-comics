@extends('layouts.public')

@section('main')
    <section class="single_comics">
        <div class="bg_cover">
            <img src="" alt="">
        </div>

        <div class="img_cover">
            {{-- <img src="{{ asset('storage/' . $comic->cover ) }}" alt=""> --}}
        </div>

        <div class="info_comics">
            {{-- <h2>{{$comic->title}}</h2> --}}
            <div class="price_available">

            </div>
            <p></p>
        </div>
    </section>
@endsection