@extends('layouts.app')

@section('title', 'Travel Edit')

@section('content')

    {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}

        <div class="form-group">
            {!! Form::label('label-origin', 'Origen') !!}
            {!! Form::text('origin', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('label-destination', 'Destino') !!}
            {!! Form::text('destination', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('label-date', 'Fecha') !!}
            {!! Form::date('datetime') !!}
        </div>

        <!-- <div class="form-group">

        </div> -->

        <div class="form-group">
            {!! Form::label('label-price', 'Precio') !!}
            {!! Form::number('price') !!}
        </div>
        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
