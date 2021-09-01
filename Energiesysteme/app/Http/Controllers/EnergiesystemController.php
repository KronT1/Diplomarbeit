<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Energiesystem;
use App\Http\Middleware\RedirectIfAuthenticated;

class EnergiesystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $energiesysteme = Energiesystem::all();

        //dd($energiesysteme);   

        return view('main',[
            'energiesysteme' =>$energiesysteme
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('create');
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
      $energiesysteme = new Energiesystem;
      $energiesysteme->name = $request->input('name');
      $energiesysteme->art = $request->input('art');
      $energiesysteme->lg = $request->input('lg');
      $energiesysteme->bg = $request->input('bg');
      $energiesysteme->save();
     
      
       return redirect ('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $energiesystem = Energiesystem::find($id);
        //dd($energiesysteme);

        return view('edit',[
            'energiesystem' =>$energiesystem
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $energiesystem = Energiesystem::find($id);

        $energiesystem = Energiesystem::where('id',$id)->
        update([
                'name' => $request->input('name'),
                'art' => $request->input('art'),
                'lg' => $request->input('lg'),
                'bg' => $request->input('bg'),
        ]);
      

        return redirect ('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $energiesystem = Energiesystem::find($id);

        $energiesystem->delete();
        return redirect ('/');

    }



    public function kartendienst()
    {
    
        return view('kartendienst');
    }

    
}
