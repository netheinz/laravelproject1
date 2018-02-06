@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h1>Artister</h1>
            <h2>Rediger artist</h2>
        </div>
        <div class="col-lg-6 text-right">
            <a href="{!! route("artist.index") !!}" class="btn btn-primary">Oversigt</a>
        </div>

        <div class="col-lg-12">
            <hr>

            {!! Form::model($artist, ['route' => ['artist.update', $artist->id], "class" => "form-horisontal"]) !!}
            {!! Form::hidden('_method', "put") !!}

            <div class="form-group">
                {!! Form::label('name', 'Navn', ['class' => 'form-label']) !!}
                {!! Form::text('name', $artist->name, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Beskrivelse') !!}
                {!! Form::textarea('description', $artist->description, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Gem', ['class' => 'btn btn-success']) !!}
                {!! Form::button('Annuller', ['class' => 'btn btn-danger cancel']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
