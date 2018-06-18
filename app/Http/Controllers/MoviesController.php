<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = movie::all();
        return response()->json($movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //$movie = movie::find($movie->id);
        //if ( is_null( $movie ) )  {
        //    return ("Buscar en api");
            
        //}else {
            return response()->json($movie);
        //}
        
    }

    public function findByTitle($title)
    {
        $movie = movie::where('title', '=', $title )->firstOrFail() ;
        return response()->json($movie);
    }

    public function showByTittle($title)
    {
        $movie = movie::find($movie->title);
        return response()->json($movie);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }

    public function newMovie() {
        $movie = new movie;
        $movie->title = "Batman";
        $movie->anyo = 2000;
        $movie->runtime = '120 min';
        $movie->genre = 'action';
        $movie->urlImage = 'www.batman.com';
        $movie->lastDateUpdate = date("Y-m-d H:i:s");
        $movie->save();

    }
}
