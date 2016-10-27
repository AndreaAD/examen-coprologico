<?php 

namespace Jy\ExamenCoprologico\Repo;

use Illuminate\Support\Facades\Config;

trait TraitExamenCoprologicoConsulta {
	
    public function examenCoprologico()
    {
        return $this->hasOne(Config::get('examen-coprologico::modelo'), 'id_consulta');
    }
}