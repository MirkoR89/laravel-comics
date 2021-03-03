@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <hr>
                    <p>On your left you can find a comics button to manage all comics.</p>
                    <p>Press <i class="fas fa-book-open"></i> to create, edit and cancel the comincs</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection