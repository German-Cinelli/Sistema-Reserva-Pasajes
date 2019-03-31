@extends('dashboard.starter')

@section('title', 'Travels')

@section('content')
    @include('common.success')

    <section class="content-header">
        <h1>
            Viajes
            <small>Auditoría</small>
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
                    <table id="example1" class="table table-bordered sm-small table-hover">
                        <thead>
                            <tr>
                            <th>ID Empleado</th>
                            <th>ID Viaje</th>
                            <th>Ingresado en...</th>
                            <th>Última actualización</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($travels as $travel)
                            <tr>
                                <td>{{$travel->user_id}}</td>
                                <td>{{$travel->id}}</td>
                                <td><span class="badge bg-light-blue">{{$travel->created_at}}</span></td>
                                <td><span class="badge bg-light-blue">{{$travel->updated_at}}</span></td>
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

