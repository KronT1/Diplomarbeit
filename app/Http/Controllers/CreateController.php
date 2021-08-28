<?php

namespace App\Http\Controllers;

use App\energiesysteme;
use App\ModelEnergiesysteme as AppModelEnergiesysteme;
use Illuminate\Http\Request;

class CreateController extends Controller
{

 public function index(){
     return view('create');
 }

 public function home(){
    return view('energiesysteme');
}

public function store(Request $request)
{

    if($request->submit == 'create-btn'){
            redirect('/');
          
    }

}



}