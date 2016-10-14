<div class="row cyan">
    <div class="col-xs-12">
        <h1>{{ Lang::get('app.examen_coprologico.titulo') }}</h1>
    </div>
</div>
<!-- <div class="contenido">
    <div class="row">
        <div class="col-xs-12">
            <h3><i class="fa fa-file-o"></i> {{ Lang::get('app.anamnesis.sub-titulo') }}</h3>
            <p class="text-muted">{{ Lang::get('app.anamnesis.mensaje.formulario') }}<br><br></p>
        </div>
    </div>
    @if ($status == 'error')
        @include('includes.msgerror')
    @elseif ( $status == 'success' )
        @include('includes.msgok')
    @endif
    {{ Form::open(['url' => Config::get('anamnesis::prefijo_ruta').'/', 'method' => (!$anamnesis || $anamnesis['id_consulta'] != $consulta['id']? 'post' : 'put')]) }}
        <fieldset>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="list-group">
                        <li class="list-group-item" >
                            @include('includes.paciente_consulta')
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-xs-12 form-group {{ $errors->has('enfermedades') ? 'has-error':'' }}">
                            <label for="enfermedades">{{ Lang::get('app.label.enfermedades') }}</label>
                            {{ Form::textarea('enfermedades', $anamnesis ? $anamnesis['enfermedades'] : Input::old('enfermedades'), array('class' => 'form-control')) }}
                        </div>
                        <div class="col-xs-12 form-group {{ $errors->has('tratamientos') ? 'has-error':'' }}">
                            <label for="tratamientos">{{ Lang::get('app.label.tratamientos') }}</label>
                            {{ Form::textarea('tratamientos', $anamnesis ? $anamnesis['tratamientos'] : Input::old('tratamientos'), array('class' => 'form-control')) }}
                        </div>
                        <div class="col-xs-12 form-group {{ $errors->has('intervenciones_quirurgicas') ? 'has-error':'' }}">
                            <label for="intervenciones_quirurgicas">{{ Lang::get('app.label.intervenciones_quirurgicas') }}</label>
                            {{ Form::textarea('intervenciones_quirurgicas', $anamnesis ? $anamnesis['intervenciones_quirurgicas'] : Input::old('intervenciones_quirurgicas'), array('class' => 'form-control')) }}
                        </div>
                        <div class="col-xs-12 form-group {{ $errors->has('alergias') ? 'has-error':'' }}">
                            <label for="alergias">{{ Lang::get('app.label.alergias') }}</label>
                            {{ Form::textarea('alergias', $anamnesis ? $anamnesis['alergias'] : Input::old('alergias'), array('class' => 'form-control')) }}
                        </div>
                        <div class="col-xs-12 form-group {{ $errors->has('habitos') ? 'has-error':'' }}">
                            <label for="habitos">{{ Lang::get('app.label.habitos') }}</label>
                            {{ Form::textarea('habitos', $anamnesis ? $anamnesis['habitos'] : Input::old('habitos'), array('class' => 'form-control')) }}
                        </div>
                        <div class="col-xs-12 form-group {{ $errors->has('historia_personal_social') ? 'has-error':'' }}">
                            <label for="historia_personal_social">{{ Lang::get('app.label.historia_personal_social') }}</label>
                            {{ Form::textarea('historia_personal_social', $anamnesis ? $anamnesis['historia_personal_social'] : Input::old('historia_personal_social'), array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                {{ Form::hidden('historial', true, ['data-url' => URL::to('historial/anamnesis'), 'data-id' => $consulta['id_paciente']]) }}
                {{ Form::hidden('id', $anamnesis ? $anamnesis['id'] : '0', array()) }}
                {{ Form::hidden('id_consulta', $consulta ? $consulta['id'] : '0', array()) }}
                {{ Form::hidden('id_sede', $sede ? $sede['id'] : '0', array()) }}
                <div class="col-xs-12">
                    <hr>
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary">{{ Lang::get('app.interface.guardar') }}</button>
                    <a href="{{URL::to(Config::get('anamnesis::prefijo_ruta').'/')}}" class="btn btn-default back">{{ Lang::get('app.interface.volver') }}</a>
                </div>
            </div>
        </fieldset>
    {{ Form::close() }}
</div>
 -->