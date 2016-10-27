<div class="row cyan">
    <div class="col-xs-12">
        <h1>{{ Lang::get('app.examen_coprologico.titulo') }}</h1>
    </div>
</div>
<div class="contenido">
    <div class="row">
        <div class="col-xs-12">
            <h3><i class="fa fa-file-o"></i> {{ Lang::get('app.examen_coprologico.sub-titulo') }}</h3>
            <p class="text-muted">{{ Lang::get('app.examen_coprologico.mensaje.formulario') }}<br><br></p>
        </div>
    </div>
    @if ($status == 'error')
        @include('includes.msgerror')
    @elseif ( $status == 'success' )
        @include('includes.msgok')
    @endif
    {{ Form::open(['url' => Config::get('examen-coprologico::prefijo_ruta').'/', 'method' => (!$examen_coprologico || $examen_coprologico['id_consulta'] != $consulta['id']? 'post' : 'put')]) }}
        <fieldset>
            <div class="row">
                <div class="col-xs-12">
                    <ul class="list-group">
                        <li class="list-group-item" >
                            @include('includes.paciente_consulta')
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h6>{{ Lang::get('app.label.examen_fisico') }}</h6>
                                </div> 
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="color">{{ Lang::get('app.label.color') }}</label>
                                    {{ Form::text('color', $examen_coprologico ? $examen_coprologico['color'] : Input::old('color'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <label for="consistecia">{{ Lang::get('app.label.consistecia') }}</label>
                                    {{ Form::text('consistecia', $examen_coprologico ? $examen_coprologico['consistecia'] : Input::old('consistecia'), array('class' => 'form-control')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h6>{{ Lang::get('app.label.examen_microscopico') }}</h6>
                                </div> 
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="flora_bacteriana">{{ Lang::get('app.label.flora_bacteriana') }}</label>
                                    {{ Form::text('flora_bacteriana', $examen_coprologico ? $examen_coprologico['flora_bacteriana'] : Input::old('flora_bacteriana'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="almidones">{{ Lang::get('app.label.almidones') }}</label>
                                    {{ Form::text('almidones', $examen_coprologico ? $examen_coprologico['almidones'] : Input::old('almidones'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="celulas_vegetales">{{ Lang::get('app.label.celulas_vegetales') }}</label>
                                    {{ Form::text('celulas_vegetales', $examen_coprologico ? $examen_coprologico['celulas_vegetales'] : Input::old('celulas_vegetales'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="fibra_muscular">{{ Lang::get('app.label.fibra_muscular') }}</label>
                                    {{ Form::text('fibra_muscular', $examen_coprologico ? $examen_coprologico['fibra_muscular'] : Input::old('fibra_muscular'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="jabones">{{ Lang::get('app.label.jabones') }}</label>
                                    {{ Form::text('jabones', $examen_coprologico ? $examen_coprologico['jabones'] : Input::old('jabones'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="pelos_vegetal">{{ Lang::get('app.label.pelos_vegetal') }}</label>
                                    {{ Form::text('pelos_vegetal', $examen_coprologico ? $examen_coprologico['pelos_vegetal'] : Input::old('pelos_vegetal'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="fibra_vegetal">{{ Lang::get('app.label.fibra_vegetal') }}</label>
                                    {{ Form::text('fibra_vegetal', $examen_coprologico ? $examen_coprologico['fibra_vegetal'] : Input::old('fibra_vegetal'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="polen">{{ Lang::get('app.label.polen') }}</label>
                                    {{ Form::text('polen', $examen_coprologico ? $examen_coprologico['polen'] : Input::old('polen'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="leucocitos">{{ Lang::get('app.label.leucocitos') }}</label>
                                    {{ Form::text('leucocitos', $examen_coprologico ? $examen_coprologico['leucocitos'] : Input::old('leucocitos'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="hematies">{{ Lang::get('app.label.hematies') }}</label>
                                    {{ Form::text('hematies', $examen_coprologico ? $examen_coprologico['hematies'] : Input::old('hematies'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <label for="moco">{{ Lang::get('app.label.moco') }}</label>
                                    {{ Form::text('moco', $examen_coprologico ? $examen_coprologico['moco'] : Input::old('moco'), array('class' => 'form-control')) }}
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h6>{{ Lang::get('app.label.examen_parasitologico') }}</h6>
                                </div> 
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <label for="quistes_de_entamoeba_histolytica">{{ Lang::get('app.label.quistes_de_entamoeba_histolytica') }}</label>
                                    {{ Form::text('quistes_de_entamoeba_histolytica', $examen_coprologico ? $examen_coprologico['quistes_de_entamoeba_histolytica'] : Input::old('quistes_de_entamoeba_histolytica'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <label for="quistes_de_endolimax_nana">{{ Lang::get('app.label.quistes_de_endolimax_nana') }}</label>
                                    {{ Form::text('quistes_de_endolimax_nana', $examen_coprologico ? $examen_coprologico['quistes_de_endolimax_nana'] : Input::old('quistes_de_endolimax_nana'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <label for="quistes_de_entamoeba_coli">{{ Lang::get('app.label.quistes_de_entamoeba_coli') }}</label>
                                    {{ Form::text('quistes_de_entamoeba_coli', $examen_coprologico ? $examen_coprologico['quistes_de_entamoeba_coli'] : Input::old('quistes_de_entamoeba_coli'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <label for="quistes_de_iodamoeba_butschlii">{{ Lang::get('app.label.quistes_de_iodamoeba_butschlii') }}</label>
                                    {{ Form::text('quistes_de_iodamoeba_butschlii', $examen_coprologico ? $examen_coprologico['quistes_de_iodamoeba_butschlii'] : Input::old('quistes_de_iodamoeba_butschlii'), array('class' => 'form-control')) }}
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <label for="blastocystis_hominis">{{ Lang::get('app.label.blastocystis_hominis') }}</label>
                                    {{ Form::text('blastocystis_hominis', $examen_coprologico ? $examen_coprologico['blastocystis_hominis'] : Input::old('blastocystis_hominis'), array('class' => 'form-control')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::hidden('historial', true, ['data-url' => URL::to('historial/examen_coprologico'), 'data-id' => $consulta['id_paciente']]) }}
                {{ Form::hidden('id', $examen_coprologico ? $examen_coprologico['id'] : '0', array()) }}
                {{ Form::hidden('id_consulta', $consulta ? $consulta['id'] : '0', array()) }}
                <div class="col-xs-12">
                    <hr>
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary">{{ Lang::get('app.interface.guardar') }}</button>
                    <a href="{{URL::to(Config::get('examen-coprologico::prefijo_ruta').'/')}}" class="btn btn-default back">{{ Lang::get('app.interface.volver') }}</a>
                </div>
            </div>
        </fieldset>
    {{ Form::close() }}
</div>
