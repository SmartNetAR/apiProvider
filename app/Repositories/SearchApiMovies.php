<?php

namespace App\Repositories;

use GuzzleHttp\Client;

Class SearchApiMovies {

    public function search($title){
        $apikey = 'f4fea2a9';
        // $search = 'Batman';
        $url = 'http://www.omdbapi.com' ; 

        $client = new Client([
            'base_uri' => $url,
            'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', "/?apikey={$apikey}&s={$title}");

        return json_decode ( $response->getBody()->getContents() ,true);
    }
}