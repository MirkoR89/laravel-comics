@extends('layouts.dashboard')

@section('content')
<h2>Comics</h2>
<a class="btn btn-primary mb-3" href="{{ route('admin.comics.create') }}" role="button">Add comics</a>

@foreach ($comics as $comic)
<div class="card" style="width: 16rem;">
    @if ('cover')
    <img src="{{ asset('storage/' . $comic->cover ) }}" class="card-img-top" alt="...">    
    @endif
    <div class="card-body">
        <h5 class="card-title">{{$comic->title}}</h5>
        <p class="card-text">{{$comic->description}}</p>
        <span class="card-text">{{$comic->price}}</span>
        <a href="{{ route('admin.comics.show', ['comic'=>$comic->id]) }}" class="btn btn-success">Show</a>
        <a href="{{ route('admin.comics.edit', ['comic'=>$comic->id]) }}" class="btn btn-primary">Edit</a>

        <form action="{{ route('admin.comics.destroy', ['comic'=>$comic->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
        </form>

        {{-- Modal --}}
        {{-- <div class="modal fade" id="destroy-{{$comic->id}}" tabindex="-1" role="dialog"
        aria-labelledby="comic-destroy-{{$comic->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comic-destroy-{{$comic->id}}">Delete comic
                        {{$comic->id}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        Are you sure?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div> --}}
</div>
@endforeach
@endsection
