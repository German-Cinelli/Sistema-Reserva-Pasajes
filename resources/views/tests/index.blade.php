@extends('dashboard.starter')

@section('title', 'Análisis')

@section('content')
    @include('common.success')

    <section class="content-header">
        <h1>
            Auditoría
            <small>Factores de riesgo</small>
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
                            <th>Acción</th>
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
                                <!-- risk -->
                                @if ($test->risk <= 7)
                                    <td><span class="badge bg-green">{{$test->risk}}</span></td>
                                 @elseif ($test->risk >= 8 && $test->risk <= 11)
                                    <td><span class="badge bg-yellow">{{$test->risk}}</span></td>
                                @else
                                    <td><span class="badge bg-red">{{$test->risk}}</span></td>
                                @endif

                                <td><span class="badge bg-light-blue">{{$test->created_at}}</span></td>
                                <td>
                                    <div class="btn-group-vertical">
                                    <a href="#" button type="button" class="btn">Imprimir</a>
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
