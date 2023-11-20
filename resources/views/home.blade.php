@extends('layouts.main')

@section('content')
    <h1 class="text-center">Home</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class=" col p-2">
                <div class="card text-bg-dark m-auto">

                    <img src="{{$movie->cover_url}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <a href="{{ route('detail_movie',['id'=>$movie->id]) }}" class="btn btn-info">Info</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
