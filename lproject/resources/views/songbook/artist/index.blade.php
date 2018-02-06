@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h1>Artister</h1>
            <h2>Oversigt</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a href="{!! route("artist.create") !!}" class="btn btn-primary">Opret ny</a>
        </div>

        <div class="col-lg-12">
            <hr>
            @foreach($artists as $artist)
                <a href="{!! route('artist.edit', $artist->id) !!}" title="Rediger"><i class="fas fa-pencil-alt"></i></a>
                <a href="{!! route('artist.show', $artist->id) !!}" title="Vis"><i class="fas fa-eye"></i></a>
                <a href="{!! route('artist.destroy', $artist->id) !!}"  title="Slet" data-token="{!! csrf_token() !!}" class="delete" name="artist" id="{!! $artist->id !!}"><i class="fas fa-trash-alt"></i></a>
                <a href="{!! route('artist.show', $artist->id) !!}">{!! $artist->name !!}</a>
                <br>
            @endforeach
            <hr>
        </div>
    </div>
@stop
