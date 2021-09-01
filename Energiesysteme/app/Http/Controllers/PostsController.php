<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    public function index(){
       
    
    //return view('posts/index');

//Datenbank Laravel -> andere funktioniert nicht

    $energiesysteme = DB::select('select * from energiesysteme;');

    dd( $energiesysteme);

}

}
