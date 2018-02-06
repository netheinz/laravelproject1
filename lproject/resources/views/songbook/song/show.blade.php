@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h1>Sange</h1>
            <h2>Vis sang</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a href="{!! route("song.index") !!}" class="btn btn-primary">Oversigt</a>
            <a href="{!! route("song.edit", $song->id) !!}" class="btn btn-primary">Rediger</a>
        </div>

        <div class="col-lg-12">
            <hr>

            <h3>{!! $song->title !!} - {!! $song->artist->name !!}</h3>
            <pre>{!! $song->text !!}</pre>
        </div>
    </div>
@stop
