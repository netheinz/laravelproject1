@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h1>Sange</h1>
            <h2>Oversigt</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a href="{!! route("song.create") !!}" class="btn btn-primary">Opret ny</a>
        </div>

        <div class="col-lg-12">
            <hr>
            @foreach($songs as $song)
                <a href="{!! route('song.edit', $song->id) !!}" title="Rediger"><i class="fas fa-pencil-alt"></i></a>
                <a href="{!! route('song.show', $song->id) !!}" title="Vis"><i class="fas fa-eye"></i></a>
                <a href="{!! route('song.destroy', $song->id) !!}"  title="Slet" data-token="{!! csrf_token() !!}" class="delete" name="song" id="{!! $song->id !!}"><i class="fas fa-trash-alt"></i></a>
                <a href="{!! route('song.show', $song->id) !!}">{!! $song->title !!}</a>
                {!! $song->artist->name !!}
                <br>
            @endforeach
            <hr>
        </div>
    </div>
@stop
