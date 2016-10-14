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
        // $this->model = $this->app['config']->get('anamnesis::'.$model);

        // if ($this->model)
        //     return $this->app[$this->model];

        // throw new \Exception("No se encuentra el modelo especificado (".$model.") en jy/anamnesis/config/config.php", 639);
    }

    public function store(array $input)
    {
        // $model = $this->model(self::MODELO);
        // $anamnesis = $model->newInstance([]);
        // return $this->save($anamnesis, $input);
    }

    public function update(array $input)
    {
        // $anamnesis = $this->get($input['id_consulta']);
        // return $this->save($anamnesis, $input);
    }

    public function get($id_consulta)
    {
        // $model = $this->model(self::MODELO);
        // return $model->where('id_consulta', '=', $id_consulta)->first();
    }

    public function getLast($consultas)
    {
        // $model = $this->model(self::MODELO);
        // return $model->whereIn('id_consulta', $consultas)
        //             ->orderBy('id', 'desc')
        //             ->first();
    }

    public function save($anamnesis, $input)
    {
        // $anamnesis->id_consulta = $input['id_consulta'];
        // $anamnesis->enfermedades = $input['enfermedades'];
        // $anamnesis->tratamientos = $input['tratamientos'];
        // $anamnesis->intervenciones_quirurgicas = $input['intervenciones_quirurgicas'];
        // $anamnesis->alergias = $input['alergias'];
        // $anamnesis->habitos = $input['habitos'];
        // $anamnesis->historia_personal_social = $input['historia_personal_social'];

        // if ($anamnesis->validate())
        // {
        //     $anamnesis->save();
        //     return $anamnesis;
        // } else {
        //     $this->errors = $anamnesis->errors();
        //     return false;
        // }
    }

    public function errors()
    {
        return $this->errors;
    }
}