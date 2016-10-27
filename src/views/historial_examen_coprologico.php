<div class="row">
    <div class="col-xs-12 form-group">
          <label>{{ Lang::get('app.label.fecha').'/'.Lang::get('app.label.hora') }}</label>
          <p class="form-control-static"> 
               Fecha: {{ $historial['created_at'] }}
          </p>
    </div>
    <div class="col-xs-12">
        <div class="row">
            @if ($examen_coprologico['color'] != "")
                <div class="col-xs-12 form-group">
                    <label for="color">{{ Lang::get('app.label.color') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['color'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['consistecia'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="consistecia">{{ Lang::get('app.label.consistecia') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['consistecia'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['flora_bacteriana'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="flora_bacteriana">{{ Lang::get('app.label.flora_bacteriana') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['flora_bacteriana'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['almidones'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="almidones">{{ Lang::get('app.label.almidones') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['almidones'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['celulas_vegetales'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="celulas_vegetales">{{ Lang::get('app.label.celulas_vegetales') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['celulas_vegetales'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['fibra_muscular'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="fibra_muscular">{{ Lang::get('app.label.fibra_muscular') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['fibra_muscular'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['jabones'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="jabones">{{ Lang::get('app.label.jabones') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['jabones'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['pelos_vegetal'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="pelos_vegetal">{{ Lang::get('app.label.pelos_vegetal') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['pelos_vegetal'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['fibra_vegetal'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="fibra_vegetal">{{ Lang::get('app.label.fibra_vegetal') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['fibra_vegetal'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['polen'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="polen">{{ Lang::get('app.label.polen') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['polen'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['leucocitos'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="leucocitos">{{ Lang::get('app.label.leucocitos') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['leucocitos'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['hematies'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="hematies">{{ Lang::get('app.label.hematies') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['hematies'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['quistes_de_entamoeba_histolytica'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="quistes_de_entamoeba_histolytica">{{ Lang::get('app.label.quistes_de_entamoeba_histolytica') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['quistes_de_entamoeba_histolytica'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['quistes_de_endolimax_nana'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="quistes_de_endolimax_nana">{{ Lang::get('app.label.quistes_de_endolimax_nana') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['quistes_de_endolimax_nana'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['quistes_de_entamoeba_coli'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="quistes_de_entamoeba_coli">{{ Lang::get('app.label.quistes_de_entamoeba_coli') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['quistes_de_entamoeba_coli'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['quistes_de_iodamoeba_butschlii'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="quistes_de_iodamoeba_butschlii">{{ Lang::get('app.label.quistes_de_iodamoeba_butschlii') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['quistes_de_iodamoeba_butschlii'] }}</p>
                </div>
            @endif
            @if ($examen_coprologico['blastocystis_hominis'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="blastocystis_hominis">{{ Lang::get('app.label.blastocystis_hominis') }}</label>
                    <p class="form-control-static">{{ $examen_coprologico['blastocystis_hominis'] }}</p>
                </div>
            @endif
        </div>
    </div>
</div>