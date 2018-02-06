<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    protected $rules = [
        'title' => ['required'],
        'text' => ['required']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artists = Artist::where('deleted', '=', 0)->get();
        return view("songbook.artist.index", ["artists" => $artists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("songbook.artist.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $artist = new Artist();
        $artist->name = $request->name;
        $artist->description = $request->description;
        $artist->deleted = 0;

        //if successful we want to redirect
        if($artist->save()) {
            return redirect()->route('artist.show', $artist->id);
        }else{
            return redirect()->action('songbook.artist.create');
        }
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
        $artist = Artist::Find($id);
        return view("songbook.artist.show", compact("artist"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $artist = Artist::find($id);
        return view('songbook.artist.edit', compact('artist'));

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
        //
        $artist = Artist::find($id);
        $artist->name = $request->name;
        $artist->description = $request->description;
        $artist->save();
        return view('songbook.artist.show')->with("artist", $artist);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artist = Artist::find($id);
        $artist->deleted = 1;
        $artist->save();
        $this->index();

    }
}
