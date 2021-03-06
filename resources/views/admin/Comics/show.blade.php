@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="d-flex align-items-start">
        <img class="w-50" src="{{ asset('storage/' . $comic->cover ) }}" alt="cover"> 
        <div class="admin_comic_info ml-5">
            <h2>{{$comic->title}}</h2>
            <p>{{$comic->description}}</p>
            <ul class="list-group w-100">
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
        
                <li class="list-group-item"><strong>Price:</strong> {{$comic->price}}</li>
        
                @if ($comic->available == 0)
                <li class="list-group-item"> NOT AVAILABLE</li>    
                @else
                <li class="list-group-item">AVAILABLE</li>        
                @endif
                    
                <li class="list-group-item"><strong>Series:</strong> {{$comic->series}}</li>
                <li class="list-group-item"><strong>On Sale Date:</strong> {{$comic->on_sale_date}}</li>
                <li class="list-group-item"><strong>Volume/Issue #:</strong> {{$comic->volume_issue}}</li>
                <li class="list-group-item"><strong>Trim Size:</strong> {{$comic->trim_size}}</li>
                <li class="list-group-item"><strong>Page Count:</strong> {{$comic->page_count}}</li>
                <li class="list-group-item"><strong>Rated:</strong> {{$comic->rated}}</li>
            </ul>
        </div>
    </div>
    
    <div class="admin_banner mt-5">
        <h4>Banner</h4>
        <img class="w-100" src="{{ asset('storage/' . $comic->banner ) }}" alt="cover"> 
    </div>
</div>
@endsection