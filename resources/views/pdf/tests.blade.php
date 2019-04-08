@extends('dashboard.starter')

@section('title', 'Análisis')

@section('content')
    @include('common.success')

    <section class="content-header">
        <h1>
            Análisis
            <small>Análisis de impacto y factores de riesgo</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="http://127.0.0.1:8000/start"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Auditoría</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <add-test-btn></add-test-btn>
                            <create-form-test></create-form-test>
                            <br><br>
                        </div>
                    <table id="example1" class="table table-bordered sm-small table-hover">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Descripción</th>
                            <th>Impacto de daño</th>
                            <th>Probabilidad de amenaza</th>
                            <th>Riesgo</th>
                            <th>Creado el</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tests as $test)
                            <tr>
                                <td>{{$test->id}}</td>
                                <td>{{$test->date}}</td>
                                <td>{{$test->description}}</td>
                                <td>{{$test->dmg}}</td>
                                <td>{{$test->threat}}</td>
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
