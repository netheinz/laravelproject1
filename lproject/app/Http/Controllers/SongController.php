<?php

namespace App\Http\Controllers;

use App\Song;
use App\Artist;
use Illuminate\Http\Request;


class SongController extends Controller
{
    protected $rules = [
        'title' => ['required'],
        'text' => ['required']
    ];
    public $moduleName = "";

    /**
     * SongController constructor.
     */
    public function __construct()
    {
        $this->moduleName = "Sange";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $songs = Song::Where('deleted', '=', 0)->get();
        return view('songbook.song.index', ["songs" => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $artists = Artist::pluck("name","id");
        return view('songbook.song.create', compact("artists"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $song = new Song();
        $song->title = $request->title;
        $song->text = $request->text;
        $song->artist_id = $request->artist_id;
        $song->deleted = 0;

        //if successful we want to redirect
        if($song->save()) {
            return redirect()->route('song.show', $song->id);
        }else{
            return redirect()->action('songbook.song.create');
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
        $song = Song::Find($id);
        return view('songbook.song.show', ["song" => $song]);
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
        $song = Song::find($id);
        $artists = Artist::pluck("name","id");
        return view('songbook.song.edit', compact('song', 'artists'));
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
        $song = Song::find($id);
        $song->title = $request->title;
        $song->text = $request->text;
        $song->artist_id = $request->artist_id;
        $song->save();
        return view('songbook.song.show')->with("song", $song);
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
        $song = Song::find($id);
        $song->deleted = 1;
        $song->save();
        $this->index();

    }
}
