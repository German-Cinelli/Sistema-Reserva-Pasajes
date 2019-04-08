@extends('layouts.app')

@section('title', 'Travels')

@section('content')
    @include('common.success')

    <section class="content-header">
        <h2>Viajes</h2>
        <small>Lista de viajes disponibles</small>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box">
                    <!-- /.box-header -->
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
                                            <a href="#" button type="button" class="btn btn-info">Reservar</a>
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
