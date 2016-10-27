<?php

use \Illuminate\Routing\Controller;
use Jy\Consulta\Repo\ConsultaInterface;
use Jy\ExamenCoprologico\Repo\ExamenCoprologicoInterface;

class ExamenCoprologicoController extends Controller {

    protected $examen_coprologico;
    protected $consulta;

    public function __construct(ConsultaInterface $consulta, ExamenCoprologicoInterface $examen_coprologico)
    {
        $this->consulta = $consulta;
        $this->examen_coprologico = $examen_coprologico;
    }

    public function index()
    {
        $consulta_activa = $this->consulta->obtenerConsultaActiva();
        if (!is_null($consulta_activa))
        {
            $examen_coprologico = $this->examen_coprologico->get($consulta_activa->id);

            if (!$examen_coprologico)
            {
                $paciente = $consulta_activa->paciente;
                $consultas = $paciente->consultas()->lists('id');
                $examen_coprologico = $this->examen_coprologico->getLast($consultas);
            }

            $formulario = [
                'empresa' => $consulta_activa->empresa,
                'sede' => $consulta_activa->sede,
                'paciente' => $consulta_activa->paciente,
                'consulta' => $consulta_activa,
                'examen_coprologico' => $examen_coprologico,
                'status' => Session::get('status')
            ];

            $datos = [
                'seccion' => Config::get('examen-coprologico::seccion_examen_coprologico'),
                'formulario' => View::make(Config::get('examen-coprologico::formulario'), $formulario)
            ];

            return View::make(Config::get('examen-coprologico::vista_formulario'), $datos);
        } else {

            return Redirect::to('error/C01/'.Config::get('examen-coprologico::seccion_examen_coprologico'));
        }
    }

    public function store()
    {
        $resultado = $this->examen_coprologico->store(Input::all());
        if ($resultado)
        {
            $this->consulta->updateHistoria(Input::get('id_consulta'), Config::get('examen-coprologico::seccion_examen_coprologico'));
            return Redirect::to(Config::get('examen-coprologico::prefijo_ruta'))
                            ->with('status', 'success');
        } else {
            return Redirect::to(Config::get('examen-coprologico::prefijo_ruta'))
                            ->withInput()
                            ->withErrors($this->examen_coprologico->errors())
                            ->with('status', 'error');
        }
    }

    public function update()
    {
        $resultado = $this->examen_coprologico->update(Input::all());
        
        if($resultado)
        {       
            return Redirect::to(Config::get('examen-coprologico::prefijo_ruta'))
                            ->with('status', 'success');
        } else {
            return Redirect::to(Config::get('examen-coprologico::prefijo_ruta'))
                            ->withInput()
                            ->withErrors( $this->examen_coprologico->errors() )
                            ->with('status', 'error');
        }
    }

    public function historialExamenCoprologico()
    {
        $historiales = $this->consulta->historiales(Input::get('id_paciente'), Input::get('fecha_i', null), Input::get('fecha_f', null));

        $examen_coprologico = [];

        foreach ($historiales as $historial) 
        {
            if (count($historial->examenCoprologico))
                array_push($examen_coprologico, $historial);
        }

        return Response::json($examen_coprologico);
    }

    public function getHistorialExamenCoprologico()
    {
        $historial = $this->consulta->get(Input::get('id'));
        $datos = [
            'historial' => $historial,
            'examen_coprologico' => $historial->examenCoprologico
        ];

        return View::make(Config::get('examen-coprologico::historial_examen_coprologico'), $datos)
                    ->render();
    }

}