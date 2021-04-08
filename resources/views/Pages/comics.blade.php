@extends('layouts.public')

@section('main')
<section class="comics_list mt-5">
    <div class="container title_section d-flex justify-content-center align-items-center">
        <h3 class="mb-0 py-2">COMIC & GRAPHIC NOVELS</h3>
    </div>
    <div class="comics fluid-container d-flex pt-3">
        @foreach ($comics as $comic)
        <div class="comics_card d-flex flex-column mx-2 pt-4">
            <a href="{{ route('single_comics', $comic->id) }}"><img src="{{ asset('storage/' . $comic->cover ) }}" alt=""></a>
            <span class="mt-2">{{$comic->title}}</span>

            @if ($comic->available == 1)
            <span class="mb-2">AVAILABLE</span>
            @else
            <span class="mb-2">NOT AVAILABLE</span>
            @endif
        </div>
        @endforeach
    </div>
</section>
@endsection
