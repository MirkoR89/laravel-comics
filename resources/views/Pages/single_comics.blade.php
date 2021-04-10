@extends('layouts.public')

@section('main')
    <section class="single_comics">
        <div class="jumbo"></div>
        <div class="bg_blue"></div>

        <div class="container">
            <div class="img_cover">
                <img src="{{ asset('storage/' . $comic->cover ) }}" alt="">
            </div>
    
            <div class="info_comics">
                <h2 class="mt-5">{{$comic->title}}</h2>
                <div class="price_available px-2 d-flex align-items-center justify-content-between">
                    <div class="price_available_cont d-flex justify-content-between">
                        <span>U.S. Price: ${{$comic->price}}</span>
                        @if ($comic->available == 1)
                        <span>AVAILABLE</span>
                        @else
                        <span>NOT AVAILABLE</span>
                        @endif
                    </div>
                    <span class="px-2">Buy Now <i class="fas fa-caret-down"></i></span>
                </div>
                <p>{{$comic->descriptiond}}</p>
            </div>
        </div>
    </section>
@endsection