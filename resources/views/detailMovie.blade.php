@extends('layouts.main')

{{-- @dump($cover); --}}

@section('content')
    <h1 class="text-center mb-4">Dettaglio film</h1>

    <div class="card text-bg-dark m-auto" style="width: 350px;">
        <img src="{{$cover->cover_url}}" alt="">
        <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <h6 class="card-title">Original title: {{ $movie->original_title }}</h6>
            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
            <p class="card-text">{{ $movie->date }}</p>
            <p class="card-text">Vote: {{ $movie->vote }}</p>
        </div>
    </div>


@endsection
