<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $request){
        if($request->genre == null || $request->genre == "All"){
            $movie_data = Movie::all();
            $status = "all";
        }else{
            $genre = Genre::where("name",$request->genre)->first();
            $movie_data = Movie::where("genre_id",$genre->id)->get();
            $status = $genre->name;
        }
        return view('welcome',compact("movie_data","status"));
    }

    public function detail(Request $request, $id){
        $movie_data = Movie::where("id",$id)->first();
        $episode_data = Episode::where("movie_id",$id)->paginate(3);
        $recomendation = Movie::all()->random(4);
        return view('detail',compact("movie_data","episode_data","recomendation"));
    }
}
