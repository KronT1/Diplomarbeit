<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelEnergiesysteme;


class EnergiesystemeController extends Controller
{
 public function index(){
     return view('energiesysteme');
 }

/*
    public function store (Request $request)
    {
        //dd('OK');

    //$energiesysteme = new 
    //$energiesysteme->name = $request->input('name');
    //$energiesysteme->save();

    $energiesysteme = ModelEnergiesysteme::make([
        'name ' => $request->input('name'),
        'art' => $request->input('art'),
        'latitude' => $request->input('latitude'),
        'longtitude' => $request->input('longtitude')
    ]);

    //$energiesysteme->save();
    return redirect('/energiesysteme');

    }


    public function edit($id)
    {

    return view('energiesysteme/create');
    }


    public function update (Request $request, $id)
    {


    }
*/


}
