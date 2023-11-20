@extends('layouts.main')
@php

    dd($covers->id);

@endphp

@section('content')
    <h1 class="text-center">Home</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class=" col p-2">
                <div class="card text-bg-dark m-auto">
                    @foreach ($covers as $cover)
                        @if ($cover->movie_id === $movie->id)
                            <img src="{{$cover->cover_url}}" alt="">
                        @endif
                    @endforeach
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <a href="{{ route('detail_movie',['id'=>$movie->id]) }}" class="btn btn-info">Info</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
