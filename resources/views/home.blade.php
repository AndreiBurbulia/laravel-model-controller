@extends('layout.app')

@section('css')

@endsection

@section('content')
    <h1>Film</h1>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <h2> <strong>Title: </strong> {{ $movie['title'] }}</h2>
                <h3><strong>Original Title: </strong>{{ $movie['original_title'] }}</h3>
                <p><strong>Date of Release: </strong>{{ $movie['date'] }}</p>
                <p><strong>Vote: </strong> {{ $movie['vote'] }}</p>

            </div>
        @endforeach

    </div>

@endsection
