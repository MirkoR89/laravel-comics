@extends('layouts.dashboard')

@section('content')
<h1>Comics</h1>

{{-- Button create --}}
<a class="btn btn-primary my-4" href="{{ route('admin.comics.create') }}" role="button">Add comics</a>

{{-- Comics card --}}
<div class="d-flex flex-wrap">
    @foreach ($comics as $comic)
    <div class="card m-3" style="width: 20rem;">
        @if ('cover')
        <img src="{{ asset('storage/' . $comic->cover ) }}" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <h6><small class="text-muted">{{$comic->series}}</small></h6>

            <ul class="list-group list-group-flush">
                {{-- Available --}}
                @if ($comic->available == 0)
                <li class="list-group-item">NOT AVAILABLE</li>
                @else
                <li class="list-group-item">AVAILABLE</li>
                @endif

                {{-- Us price --}}
                <li class="list-group-item">Us price: $ {{$comic->price}}</li>
                
                {{-- On sale date --}}
                <li class="list-group-item">On sale date: {{$comic->on_sale_date}}</li>
            </ul>

            {{-- Buttons --}}
            <div class="card-body d-flex justify-content-around">
                {{-- Button show--}}
                <a href="{{ route('admin.comics.show', ['comic'=>$comic->id]) }}"
                    class="card-link btn btn-success">Show</a>

                {{-- Button show--}}
                <a href="{{ route('admin.comics.edit', ['comic'=>$comic->id]) }}"
                    class="card-link btn btn-info">Edit</a>

                {{-- Button delete--}}
                <form action="{{ route('admin.comics.destroy', ['comic'=>$comic->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="card-link btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>

            {{-- Modal
            <div class="modal fade" id="destroy-{{$comic->id}}" tabindex="-1" role="dialog"
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
    </div>
    @endforeach
</div>
@endsection
