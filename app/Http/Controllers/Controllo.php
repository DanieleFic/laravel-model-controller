<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movie;

class Controllo extends Controller
{
    public function index(){
        $movie_dati = movie::all();
        return view('home', compact("movie_dati"));
    }
}
