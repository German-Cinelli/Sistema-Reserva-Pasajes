@extends('dashboard.starter')

@section('title', 'User')

@section('content')
    @include('common.success')
    <div class="container">
        <p>{{$user->name}}</p>
        <p>{{$user->lastname}}</p>
        <p>{{$user->dni}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->departament}}</p>
        <p>{{$user->location}}</p>
        <p>{{$user->address}}</p>
        <p>{{$user->number}}</p>
        <p>{{$user->apartament}}</p>
        <td>{{$user->name}}</td>
    </div>
    <a href="/users/{{$user->email}}/edit" button type="button" class="btn btn-dark">Editar</a>

@endsection
