<?php

namespace App\Http\Controllers;

use App\Models\artist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return\Illuminate\Http\response.
     */
    public function index()
    { 
        $artist=artist::all();
        return view('artist.index')->with('artist',$artist);
    
    }

    /**
     * Show the form for creating a new resource.
     * @return\Illuminate\Http\response.
     */
    public function create()
    {
        return view('artist.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->except('_token');
        artist::create($input);
        return redirect('artist')->with('flash_message', 'vous avez ajouté un artiste');
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
$artist=artist::find($id);
return view('artist.show')->with('artist',$artist);
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artist=artist::find($id);
        return view('artist.edit')->with('artist',$artist);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $artist=artist::find($id);
        $input=$request->all();
        $artist->update($input);
        return redirect('artist')->with('flash_message','artiste est modifié');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(artist $artist){
       
    }
        
    }

