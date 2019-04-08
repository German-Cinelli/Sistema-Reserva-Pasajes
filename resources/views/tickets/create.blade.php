@extends('layouts.app')

@section('title', 'Tickets Create')

@section('content')

    {!! Form::open(['route' => 'tickets.store', 'method' => 'POST']) !!}

        <div class="box-body">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection
