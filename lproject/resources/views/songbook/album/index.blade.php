@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h1>Album</h1>
            <h2>Oversigt</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a href="{!! route("album.create") !!}" class="btn btn-primary">Opret ny</a>
        </div>

        <div class="col-lg-12">
            <hr>
            @foreach($albums as $album)
                <a href="{!! route('album.edit', $album->id) !!}" title="Rediger"><i class="fas fa-pencil-alt"></i></a>
                <a href="{!! route('album.show', $album->id) !!}" title="Vis"><i class="fas fa-eye"></i></a>
                <a href="{!! route('album.destroy', $album->id) !!}"  title="Slet" data-token="{!! csrf_token() !!}" class="delete" name="album" id="{!! $album->id !!}"><i class="fas fa-trash-alt"></i></a>
                <a href="{!! route('album.show', $album->id) !!}">{!! $album->title !!}</a>
                <br>
            @endforeach
            <hr>
        </div>
    </div>
@stop
