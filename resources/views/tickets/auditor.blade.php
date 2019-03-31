@extends('dashboard.starter')

@section('title', 'Ticket Auditor')

@section('content')
    @include('common.success')

    <section class="content-header">
        <h1>
            Tickets
            <small>Auditoría</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="http://127.0.0.1:8000/start"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Tickets</li>
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
                                    <th>ID Cliente</th>
                                    <th>ID Viaje</th>
                                    <th>Estado</th>
                                    <th>Reservado en...</th>
                                    <th>Última actualización del estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->user_id}}</td>
                                    <td>{{$ticket->travel_id}}</td>
                                    <td><span class="label label-success">{{$ticket->status}}</span></td>
                                    <td><span class="badge bg-light-blue">{{$ticket->created_at}}</span></td>
                                    <td><span class="badge bg-light-blue">{{$ticket->updated_at}}</span></td>
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
