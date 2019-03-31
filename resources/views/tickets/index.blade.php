@extends('layouts.app')

@section('title', 'Tickets')

@section('content')
    @include('common.success')

    <section class="content-header">
        <h1>
            Viajes
            <small>Lista de viajes disponibles</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="http://127.0.0.1:8000/start"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Viajes</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered sm-small table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Fecha</th>
                                    <th>Precio</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($travels as $travel)
                                <tr>
                                    <td>{{$travel->id}}</td>
                                    <td>{{$travel->origin}}</td>
                                    <td>{{$travel->destination}}</td>
                                    <td>{{$travel->datetime}}</td>
                                    <td>{{$travel->price}}</td>
                                    <td>
                                    <div class="btn-group-vertical">
                                        {!! Form::open(['route' => 'tickets.store', 'method' => 'POST']) !!}
                                        <!--<add-ticket-btn></add-ticket-btn>
                                        <create-form-ticket></create-form-ticket>-->
                                        <input type="hidden" name="travel_id" value="{{ $travel->id }}">
                                        {!! Form::submit('Reservar', ['class' => 'btn btn-primary']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>


@endsection
