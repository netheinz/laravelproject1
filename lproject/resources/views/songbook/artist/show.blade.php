@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h1>Artister</h1>
            <h2>Vis artist</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a href="{!! route("artist.index") !!}" class="btn btn-primary">Oversigt</a>
            <a href="{!! route("artist.edit", $artist->id) !!}" class="btn btn-primary">Rediger</a>
        </div>

        <div class="col-lg-12">
            <hr>

            <h3>{!! $artist->name !!}</h3>
            <p>{!! $artist->description !!}</p>
            <h6>Sange</h6>
            @foreach($artist->songs as $song)
                <a href="{!! route("song.show", $song->id) !!}">{!! $song->title  !!}</a><br>
            @endforeach
        </div>
    </div>
@stop
