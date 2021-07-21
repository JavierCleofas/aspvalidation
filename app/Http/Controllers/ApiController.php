<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ApiController extends Controller
{

    public function getRequest()
    {
        $client = new \GuzzleHttp\Client();
    $response = $client->get('https://apisnet.col.gob.mx/wsSignGob/apiV1/Status');
    $status = $response->getBody()->getContents();
    $json = json_decode($status, true);
    dd($json);

        return view('welcome');
    }    
}
