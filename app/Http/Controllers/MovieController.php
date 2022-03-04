<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $lista_film = Movie::all();
        return view('app',['lista_film'=>$lista_film]);
    }
}
