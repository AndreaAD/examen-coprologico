<?php 

namespace Jy\ExamenCoprologico\Repo;

use Illuminate\Support\Facades\Config;

trait TraitExamenCoprologicoConsulta {
	
    public function examen_coprologico()
    {
        return $this->hasOne(Config::get('examen_coprologico::modelo'), 'id_consulta');
    }
}