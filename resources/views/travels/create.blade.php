@extends('dashboard.starter')

@section('title', 'Travels Create')

@section('content')

    @include('common.errors')

    {!! Form::open(['route' => 'travels.store', 'method' => 'POST']) !!}

        @include('travels.form')
        <div class="box-body">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection
