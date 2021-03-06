@extends('layouts.default')
@section('content')
    <div class="panel panel-default">

        <h1>Artister</h1>
        <h2>Opret ny artist</h2>

        {!! Form::open(['action' => 'ArtistController@store', 'class' => 'form-horisontal', "id" => "artistform"] ) !!}

        <div class="form-group">
            {!! Form::label('name', 'Navn', ['class' => 'form-label']) !!}
            {!! Form::text('name', '',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Beskrivelse') !!}
            {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
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
