@extends('dashboard.starter')

@section('title', 'Users Create')

@section('content')


    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

        @include('users.form')
        <div class="box-body">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection
