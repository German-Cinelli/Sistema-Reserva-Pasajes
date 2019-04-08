@extends('layouts.app')

@section('title', 'Ticket')

@section('content')
    @include('common.success')
    <div class="container">
        <p>{{$travel->id}}</p>
        <p>{{$travel->origin}}</p>
        <p>{{$travel->destination}}</p>
        <p>{{$travel->datetime}}</p>
        <p>{{$travel->price}}</p>
    </div>
    <a href="/tickets/{{$travel->id}}/edit" button type="button" class="btn btn-dark">Reservar</a>

@endsection

