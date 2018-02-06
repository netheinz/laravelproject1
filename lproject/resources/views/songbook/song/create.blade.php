@extends('layouts.default')
@section('content')
    <div class="panel panel-default">

        <h1>Sange</h1>
        <h2>Opret ny sang</h2>

        {!! Form::open(['action' => 'SongController@store', 'class' => 'form-horisontal', "id" => "songform"] ) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
            {!! Form::text('title', '',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('text', 'Tekst') !!}
            {!! Form::textarea('text', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('artist_id', 'Artist') !!}
            {!! Form::select('artist_id', $artists, '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            <div class="form-group">
                {!! Form::submit('Gem', ['class' => 'btn btn-success']) !!}
                {!! Form::button('Annuller', ['class' => 'btn btn-danger cancel']) !!}
            </div>
        </div>
        {!! Form::close() !!}

    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop
