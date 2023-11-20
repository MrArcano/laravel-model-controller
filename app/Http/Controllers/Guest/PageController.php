<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Cover;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::select('*')
                    ->join('covers', 'covers.movie_id', '=', 'movies.id')
                    ->get();

        return view("home", compact("movies"));
    }

    public function detail_movie($id){
        $movie = Movie::find($id);
        $cover = Cover::where("movie_id", $id )->first();

        return view("detailMovie", compact("movie","cover"));
    }
}
