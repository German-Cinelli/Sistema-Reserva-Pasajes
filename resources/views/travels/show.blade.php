@extends('layouts.app')

@section('title', 'Travel')

@section('content')
    @include('common.success')
    <div class="container">
        <p>{{$travel->id}}</p>
        <p>{{$travel->origin}}</p>
        <p>{{$travel->destination}}</p>
        <p>{{$travel->datetime}}</p>
        <p>{{$travel->price}}</p>
    </div>
    <a href="/travels/{{$travel->slug}}/edit" button type="button" class="btn btn-dark">Editar</a>

@endsection
