@extends('dashboard.starter')

@section('title', 'Travels')

@section('content')
    @include('common.success')

    <section class="content-header">
        <h1>
            Viajes
            <small>Lista de viajes</small>
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
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <add-travel-btn></add-travel-btn>
                            <create-form-travel></create-form-travel>
                            <br><br>
                        </div>
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
                                        <a href="/travels/{{$travel->slug}}" button type="button" class="btn btn-info">Editar</a>
                                        <a href="#" button type="button" class="btn btn-danger">Eliminar</a>
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
