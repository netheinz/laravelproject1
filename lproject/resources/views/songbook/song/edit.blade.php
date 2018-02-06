@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h1>Sange</h1>
            <h2>Rediger sang</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a href="{!! route("song.index") !!}" class="btn btn-primary">Oversigt</a>
        </div>

        <div class="col-lg-12">
            <hr>

            {!! Form::model($song, ['route' => ['song.update', $song->id], "class" => "form-horisontal"]) !!}
            {!! Form::hidden('_method', "put") !!}

            <div class="form-group">
                {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                {!! Form::text('title', $song->title, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('text', 'Tekst') !!}
                {!! Form::textarea('text', $song->text, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('artist_id', 'Artist') !!}
                {!! Form::select('artist_id', $artists, $song->artist_id, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Gem', ['class' => 'btn btn-success']) !!}
                {!! Form::button('Annuller', ['class' => 'btn btn-danger cancel']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
