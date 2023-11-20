@extends('layouts.main')

@section('content')
    <h1 class="text-center">Dettaglio: {{ $movie->title }}</h1>

    <div class="card text-bg-dark m-auto" style="width: 350px;">
        <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <h6 class="card-title">Original title: {{ $movie->original_title }}</h6>
            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
            <p class="card-text">{{ $movie->date }}</p>
            <p class="card-text">Vote: {{ $movie->vote }}</p>
            <a href="{{ route('detail_movie',['id'=>$movie->id]) }}" class="btn btn-info">Info</a>
        </div>
    </div>


@endsection
