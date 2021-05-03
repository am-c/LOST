<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {

      $api_data = collect(Http::get('https://api.thetvdb.com/series/73739/actors')->json());
      return view('welcome')
        ->with('api_data', $api_data);
        
    }
}