<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Cover;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $covers = Cover::all();
        return view("home", compact("movies","covers"));
    }

    public function detail_movie($id){
        $movie = Movie::find($id);
        $cover = Cover::where("movie_id", $id )->first();

        return view("detailMovie", compact("movie","cover"));
    }
}
