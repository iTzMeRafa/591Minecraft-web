@extends('layouts.app')
@section('content')

    <div class="album py-5 bg-light" style="height: 100vh;">
        <div class="container">
            <h1 class="text-center mb-5">
                {{ dd($query) }}
            </h1>

        </div>
    </div>

@endsection
