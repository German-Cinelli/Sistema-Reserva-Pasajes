@extends('dashboard.starter')

@section('title', 'Ticket Edit')

@section('content')
    @include('common.success')

    <section class="content-header">
        <h1>
            Tickets
            <small>Gestionar reservas</small>
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
                                    <th>ID Ticket</th>
                                    <th>ID Cliente</th>
                                    <th>ID Viaje</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->id}}</td>
                                    <td>{{$ticket->user_id}}</td>
                                    <td>{{$ticket->travel_id}}</td>
                                    <!-- status -->
                                    @if ($ticket->status === 'Reservado')
                                        <td><span class="badge bg-yellow">{{$ticket->status}}</span></td>
                                    @else
                                        <td><span class="badge bg-green">{{$ticket->status}}</span></td>
                                    @endif

                                    <td>
                                    <div class="btn-group-vertical">

                                        {!! Form::open(array('route' => array('tickets.update', $ticket->id), 'method' => 'PUT')) !!}

                                        {!! Form::submit('Concretar pago', ['class' => 'btn btn-primary']) !!}
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
