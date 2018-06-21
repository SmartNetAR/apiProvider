<?php

namespace App\Repositories;

use GuzzleHttp\Client;

Class SearchApiMovies {

    protected $client;

    public function __construct() {
        $url = 'http://www.omdbapi.com' ; 

        $this->client = new Client([
            'base_uri' => $url,
            'timeout'  => 2.0,
        ]);
    }

    public function search($title){
        $apikey = 'f4fea2a9';
        // $search = 'Batman';
        

        $response = $this->client->request('GET', "/?apikey={$apikey}&s={$title}");

        return json_decode ( $response->getBody()->getContents() ,true);
    }
}