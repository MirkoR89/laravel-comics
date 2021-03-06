@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2>{{$comic->title}}</h2>
    <p>{{$comic->description}}</p>
    <img src="{{ asset('storage/' . $comic->cover ) }}" alt="cover">
    <ul class="list-group">
        <li class="list-group-item"><strong>Drawer:</strong>
            @foreach ($comic->drawers as $drawer)
            {{$drawer->name}},
            @endforeach
        </li>    
            <li class="list-group-item"><strong>Writer:</strong>
                @foreach ($comic->writers as $writer)
                {{$writer->name}},    
                @endforeach
            </li>

            <li class="list-group-item"><strong>Price:</strong> {{$comic->specs->price}}</li>

            @if ($comic->available == 0)
            <li class="list-group-item"> NOT AVAILABLE</li>    
            @else
            <li class="list-group-item">AVAILABLE</li>        
            @endif
                
            <li class="list-group-item"><strong>Series:</strong> {{$comic->specs->series}}</li>
            <li class="list-group-item"><strong>On Sale Date:</strong> {{$comic->specs->on_sale_data}}</li>
            <li class="list-group-item"><strong>Volume/Issue #:</strong> {{$comic->specs->volume_issue}}</li>
            <li class="list-group-item"><strong>Trim Size:</strong> {{$comic->specs->trim_size}}</li>
            <li class="list-group-item"><strong>Page Count:</strong> {{$comic->specs->page_count}}</li>
            <li class="list-group-item"><strong>Rated:</strong> {{$comic->specs->rated}}</li>
        </ul>

    </div>
@endsection