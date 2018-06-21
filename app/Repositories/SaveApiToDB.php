<?php

namespace App\Repositories;

use App\Movie;

Class SaveApiToDB {

    public function save($searchResult) {
        $object = $searchResult['Search'] ;
            
        foreach ( $object as $val ) {
            $movie = new Movie() ;
            $movie->title = $val['Title'];
            $movie->year = $val['Year'];
            $movie->imdbID = $val['imdbID'];
            $movie->type = $val['Type'];
            $movie->urlPoster = $val['Poster'];
            $movie->lastDateUpdate = date("Y-m-d H:i:s");
            $movie->save();
        }
        
        return  $object;
    }
}