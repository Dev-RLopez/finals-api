<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function searchMakeUp($brand){
        $client = new Client();
        $result = $client->request('GET','http://makeup-api.herokuapp.com/api/v1/products.json',[
            'query' =>[
            'brand' => $brand
            ]
        ]);
        return $result;
    }
}