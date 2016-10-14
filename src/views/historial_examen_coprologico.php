<div class="row">
    <div class="col-xs-12 form-group">
          <label>{{ Lang::get('app.label.fecha').'/'.Lang::get('app.label.hora') }}</label>
          <p class="form-control-static"> 
               Fecha: {{ $historial['created_at'] }}
          </p>
    </div>
    <!-- <div class="col-xs-12">
        <div class="row">
            @if ($anamnesis['enfermedades'] != "")
                <div class="col-xs-12 form-group">
                    <label for="enfermedades">{{ Lang::get('app.label.enfermedades') }}</label>
                    <p class="form-control-static">{{ $anamnesis['enfermedades'] }}</p>
                </div>
            @endif
            @if ($anamnesis['tratamientos'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="tratamientos">{{ Lang::get('app.label.tratamientos') }}</label>
                    <p class="form-control-static">{{ $anamnesis['tratamientos'] }}</p>
                </div>
            @endif
            @if ($anamnesis['intervenciones_quirurgicas'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="intervenciones_quirurgicas">{{ Lang::get('app.label.intervenciones_quirurgicas') }}</label>
                    <p class="form-control-static">{{ $anamnesis['intervenciones_quirurgicas'] }}</p>
                </div>
            @endif
            @if ($anamnesis['alergias'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="alergias">{{ Lang::get('app.label.alergias') }}</label>
                    <p class="form-control-static">{{ $anamnesis['alergias'] }}</p>
                </div>
            @endif
            @if ($anamnesis['habitos'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="habitos">{{ Lang::get('app.label.habitos') }}</label>
                    <p class="form-control-static">{{ $anamnesis['habitos'] }}</p>
                </div>
            @endif
            @if ($anamnesis['historia_personal_social'] != "")
                <div class="col-xs-12 form-group ">
                    <label for="historia_personal_social">{{ Lang::get('app.label.historia_personal_social') }}</label>
                    <p class="form-control-static">{{ $anamnesis['historia_personal_social'] }}</p>
                </div>
            @endif
        </div>
    </div> -->
</div>