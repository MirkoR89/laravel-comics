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
                    <h2>Welcome in your dashboard</h2>
                    <p>From here you can start to update your database of comics.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
