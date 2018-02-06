@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h1>Album</h1>
            <h2>Vis album</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a href="{!! route("album.index") !!}" class="btn btn-primary">Oversigt</a>
            <a href="{!! route("album.edit", $album->id) !!}" class="btn btn-primary">Rediger</a>
        </div>

        <div class="col-lg-12">
            <hr>

            <h3>{!! $album->name !!}</h3>
            <p>{!! $album->description !!}</p>
        </div>
    </div>
@stop
