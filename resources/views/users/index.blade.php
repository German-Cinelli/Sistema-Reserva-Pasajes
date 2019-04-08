@extends('dashboard.starter')

@section('title', 'Users')

@section('content')
    @include('common.success')

    <section class="content-header">
        <h1>
            Usuarios
            <small>Lista de Usuarios</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="http://127.0.0.1:8000/start"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Usuarios</li>
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
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cédula</th>
                            <th>E-mail</th>
                            <th>Departamento</th>
                            <th>Localidad</th>
                            <th>Dirección</th>
                            <th>Número</th>
                            <th>Apartamento</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->dni}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->departament}}</td>
                            <td>{{$user->location}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->number}}</td>
                            <td>{{$user->apartament}}</td>
                            <td>
                                <div class="btn-group-vertical">
                                    <a href="#" button type="button" class="btn btn-info">Editar</a>
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
