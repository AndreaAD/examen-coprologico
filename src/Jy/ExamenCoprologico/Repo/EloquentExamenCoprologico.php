<?php

namespace Jy\ExamenCoprologico\Repo;


use Jy\Consulta\Repo\ConsultaInterface;
use Jy\ExamenCoprologico\Repo\ExamenCoprologicoInterface;

class EloquentExamenCoprologico implements ExamenCoprologicoInterface {

    private $app;
    private $errors;
    private $consulta;

    public function __construct($app = null, ConsultaInterface $consulta)
    {
        $this->app = $app ?: app();
        $this->consulta = $consulta;
    }

    public function model($model)
    {
        $this->model = $this->app['config']->get('examen-coprologico::'.$model);

        if ($this->model)
            return $this->app[$this->model];

        throw new \Exception("No se encuentra el modelo especificado (".$model.") en jy/examen-coprologico/config/config.php", 639);
    }

    public function store(array $input)
    {
        $model = $this->model(self::MODELO);
        $examen_coprologico = $model->newInstance([]);
        return $this->save($examen_coprologico, $input);
    }

    public function update(array $input)
    {
        $examen_coprologico = $this->get($input['id_consulta']);
        return $this->save($examen_coprologico, $input);
    }

    public function get($id_consulta)
    {
        $model = $this->model(self::MODELO);
        return $model->where('id_consulta', '=', $id_consulta)->first();
    }

    public function getLast($consultas)
    {
        $model = $this->model(self::MODELO);
        return $model->whereIn('id_consulta', $consultas)
                    ->orderBy('id', 'desc')
                    ->first();
    }

    public function save($examen_coprologico, $input)
    {
        $examen_coprologico->id_consulta = $input['id_consulta'];
        $examen_coprologico->color = $input['color'];
        $examen_coprologico->consistecia = $input['consistecia'];
        $examen_coprologico->flora_bacteriana = $input['flora_bacteriana'];
        $examen_coprologico->almidones = $input['almidones'];
        $examen_coprologico->celulas_vegetales = $input['celulas_vegetales'];
        $examen_coprologico->fibra_muscular = $input['fibra_muscular'];
        $examen_coprologico->jabones = $input['jabones'];
        $examen_coprologico->pelos_vegetal = $input['pelos_vegetal'];
        $examen_coprologico->fibra_vegetal = $input['fibra_vegetal'];
        $examen_coprologico->polen = $input['polen'];
        $examen_coprologico->leucocitos = $input['leucocitos'];
        $examen_coprologico->hematies = $input['hematies'];
        $examen_coprologico->moco = $input['moco'];
        $examen_coprologico->quistes_de_entamoeba_histolytica = $input['quistes_de_entamoeba_histolytica'];
        $examen_coprologico->quistes_de_endolimax_nana = $input['quistes_de_endolimax_nana'];
        $examen_coprologico->quistes_de_entamoeba_coli = $input['quistes_de_entamoeba_coli'];
        $examen_coprologico->quistes_de_iodamoeba_butschlii = $input['quistes_de_iodamoeba_butschlii'];
        $examen_coprologico->blastocystis_hominis = $input['blastocystis_hominis'];

        if ($examen_coprologico->validate())
        {
            $examen_coprologico->save();
            return $examen_coprologico;
        } else {
            $this->errors = $examen_coprologico->errors();
            return false;
        }
    }

    public function errors()
    {
        return $this->errors;
    }
}