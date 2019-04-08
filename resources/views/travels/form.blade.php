
    <div class="box box-primary"><br>
        <div class="box-body">
            <div class="form-group">
                <!--**** ORIGIN ****-->
                {!! Form::label('label-origin', 'Origen') !!}
                {!! Form::select('input-origin', [
                                                    'Bella Union' => 'Bella Union',
                                                    'Ciudad de la Costa' => 'Ciudad de la Costa',
                                                    'La Boyada' => 'La Boyada',
                                                    'La Paloma' => 'La Paloma',
                                                    'Las Piedras' => 'Las Piedras',
                                                    'Parque del Plata' => 'Parque del Plata',
                                                    'Punta del Este' => 'Punta del Este',
                                                    'Toledo' => 'Toledo',
                                                    'Tres Cruces' => 'Tres Cruces'
                                                ],
                                                null, ['class' => 'form-control select2']) !!}
            </div>

            <!--**** DESTINATION ****-->
            <div class="form-group">
                {!! Form::label('label-destination', 'Destino') !!}
                {!! Form::select('input-destination', [
                                                    'Bella Union' => 'Bella Union',
                                                    'Ciudad de la Costa' => 'Ciudad de la Costa',
                                                    'La Boyada' => 'La Boyada',
                                                    'La Paloma' => 'La Paloma',
                                                    'Las Piedras' => 'Las Piedras',
                                                    'Parque del Plata' => 'Parque del Plata',
                                                    'Punta del Este' => 'Punta del Este',
                                                    'Toledo' => 'Toledo',
                                                    'Tres Cruces' => 'Tres Cruces'
                                                ],
                                                null, ['class' => 'form-control select2']) !!}
            </div>

            <!--**** DATE ****-->
            <div class="form-group">
                {!! Form::label('label-datetime', 'Fecha') !!}
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('input-datetime', '', ['class' => 'form-control pull-right', 'id' => 'input-datetime' ]) !!}
                </div>
            </div>

            <!--**** PRICE ****-->
            <div class="form-group">
                {!! Form::label('label-price', 'Precio') !!}
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    {!! Form::number('input-price', '',  ['class' => 'form-control', 'aria-label' => 'Dollar amount (with dot and two decimal places)' ]) !!}
                </div>
            </div>
        </div><!-- /.box-body -->
        <!-- Dejamos box box-primary abierto para que el button 'Save' quede dentro del form -->
