<?php 

namespace Jy\ExamenCoprologico\Repo;

use LaravelBook\Ardent\Ardent;
use Illuminate\Support\Facades\Config;

class ExamenCoprologico extends Ardent {

    public static $rules = [
        'id_consulta' => 'required',
    ];
    
    protected $table = 'examen_coprologico';
    protected $primaryKey = 'id';
    protected $fillable = ['id_consulta','color','consistencia','flora_bacteriana','almidones','celulas_vegetales','fibra_muscular','jabones','pelos_vegetal','fibra_vegetal','polen','leucocitos','hematies','moco','quistes_de_entamoeba_histolytica','quistes_de_endolimax_nana','quistes_de_entamoeba_coli','quistes_de_iodamoeba_butschlii','blastocystis_hominis'];
    protected $activo = false;

    public function consulta()
    {
        return $this->belongsTo(Config::get('examen-coprologico::modelo_consulta'), 'id_consulta');
    }
}


