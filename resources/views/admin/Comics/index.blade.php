@extends('layouts.dashboard')

@section('content')
    <h2>Comics</h2>
    <a class="btn btn-primary" href="{{ route('admin.comics.create') }}" role="button">Add comics</a>

    @foreach ($comics as $comic)
    <form action="" method="post">
         <div class="card" style="width: 18rem;">
             <img src="#" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">{{$comic->title}}</h5>
               <p class="card-text">{{$comic->description}}</p>
               <span class="card-text">{{$comic->specs->price}}</span>
               <span class="card-text">{{$comic->specs->series}}</span>
               <span class="card-text">{{$comic->specs->on_sale_data}}</span>
               <span class="card-text">{{$comic->specs->volume_issue}}</span>
               <span class="card-text">{{$comic->specs->page_count}}</span>
               <span class="card-text">{{$comic->specs->page_rated}}</span>
               <a href="#" class="btn btn-primary">Edit</a>
             </div>
           </div>
     </form>
    @endforeach
@endsection