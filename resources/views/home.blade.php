@extends('layouts.main')

@section('content')
    <h1>Home</h1>
    <div class="d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card text-bg-dark m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-title">Original title: {{ $movie->original_title }}</h6>
                    <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                    <p class="card-text">{{ $movie->date }}</p>
                    <p class="card-text">Vote: {{ $movie->vote }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
