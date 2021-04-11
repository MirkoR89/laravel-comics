@extends('layouts.dashboard')

@section('content')
@include('partials.errors')

<h2>Add a new comics</h2>

<form class="form-group" action="{{ route('admin.comics.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    {{-- Input text title --}}
    <div class="form-group my-4">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpTitle"
            placeholder="Text the title of comics">
        <small id="helpTitle" class="form-text text-muted">Text the title of comics</small>
    </div>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- Input textarea description --}}
    <div class="form-group my-4">
        <label for="decription">Description</label>
        <textarea class="form-control" type="text" name="description" id="description" rows="10"
            aria-describedby="helpDesctiption" placeholder="Description"></textarea>
        <small id="helpDesctiption" class="form-text text-muted">Text the description of comics</small>
    </div>
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="d-flex">
        {{-- Input file cover --}}
        <div class="form-group">
            <label for="cover">Cover</label>
            <input type="file" name="cover" id="cover" class="form-control-file" placeholder="Attach cover comics"
                aria-describedby="helpCover">
            <small id="helpCover" class="text-muted">Attach cover image fot the current comics</small>
        </div>
        @error('cover')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Input file Banner --}}
        <div class="form-group">
            <label for="banner">Banner</label>
            <input type="file" name="banner" id="banner" class="form-control-file" placeholder="Attach banner comics"
                aria-describedby="helpBanner">
            <small id="helpBanner" class="text-muted">Attach banner image for the current comics</small>
        </div>
        @error('Banner')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Input radio available--}}
        <div class="form-check my-4">
            <input type="radio" class="form-check-input" name="available" id="available" value="1" checked>
            <label for="available" class="form-check-label">Avaliable</label>
            <br>
            <input type="radio" class="form-check-input" name="available" id="available" value="0">
            <label for="available" class="form-check-label">Not Avaliable</label>
        </div>
        @error('available')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- Input text series--}}
    <div class="form-group my-4">
        <label for="series">Series</label>
        <input type="text" class="form-control" name="series" id="series" aria-describedby="helpSeries"
        placeholder="Insert the serie of the comics">
        <small id="helpSeries" class="form-text text-muted">Insert the serie of the comics</small>
    </div>
    @error('series')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="d-flex">
        {{-- Input number price --}}
        <div class="form-group mx-4">
            <label for="price">Us Price</label>
            <input type="number" id="price" name="price" placeholder="$" aria-describedby="helpPrice" step=".01" min="0.01"
                max="999.00">
            <small id="helpPrice" class="form-text text-muted">Insert the price of comics</small>
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Input date on sale date--}}
        <div class="form-group mx-4">
            <label for="on_sale_date">On sale date</label>
            <input type="date" id="on_sale_date" name="on_sale_date" aria-describedby="helpDate">
            <small id="helpDate" class="form-text text-muted">Insert the date of sale</small>
        </div>
        @error('on_sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Input number volume issue --}}
        <div class="form-group mx-4">
            <label for="volume">Volume/Issue #</label>
            <input type="number" id="volume_issue" name="volume_issue" aria-describedby="helpVolume" min="0,1"
                max="999,00">
            <small id="helpVolume" class="form-text text-muted">Insert the number volume of the comics</small>
        </div>
        @error('volume_issue')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    {{-- Input text trim size--}}
    <div class="form-group my-4">
        <label for="trim_size">Trim size</label>
        <input type="text" class="form-control" name="trim_size" id="trim_size" aria-describedby="helpSize"
            placeholder="Insert the size of the comics">
        <small id="helpId" class="form-text text-muted">Insert the size of the comics</small>
    </div>
    @error('trim_size')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- Input number page count --}}
    <div class="form-group my-4">
        <label for="page_count">Page count</label>
        <input type="number" id="page_count" name="page_count" aria-describedby="helpPage" min="0,1" max="999,00">
        <small id="helpPage" class="form-text text-muted">Insert the number of the page</small>
    </div>
    @error('page_count')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- Input text rated--}}
    <div class="form-group my-4">
        <label for="rated">Rated</label>
        <input type="text" class="form-control" name="rated" id="rated" aria-describedby="helprated"
            placeholder="Insert the rated of the comics">
        <small id="helprated" class="form-text text-muted">Insert the rated of the comics</small>
    </div>
    @error('rated')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="d-flex justify-content-around">
        {{-- Input select drawers --}}
        <div class="form-group">
            <label for="drawers">Drawers</label>
            <select class="form-control" name="drawers[]" id="drawers" aria-describedby="helpDrawers" multiple>
                @foreach ($drawers as $drawer)
                <option value="{{$drawer->id}}">{{$drawer->name}}</option>
                @endforeach
            </select>
            <small id="helpDrawers" class="text-muted">Select the drawers</small>
        </div>
        @error('drawers')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    
        {{-- Input select writers --}}
        <div class="form-group">
            <label for="writers">Writers</label>
            <select class="form-control" name="writers[]" id="writers" aria-describedby="helpWriters" multiple>
                @foreach ($writers as $writer)
                <option value="{{$writer->id}}">{{$writer->name}}</option>
                @endforeach
            </select>
            <small id="helpWriters" class="text-muted">Select the writers</small>
        </div>
        @error('writers')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>
@endsection
