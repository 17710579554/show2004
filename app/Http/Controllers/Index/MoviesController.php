<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        return view('movies.index');

    }

    public function save(){
        for ($x=0; $x<=10; $x++) {
            echo  $x;
        }
    }
}
