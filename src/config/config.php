<?php

return [

	/*CONFIGURACION*/

	//Secciones
	'seccion_anamnesis' => 'ExamenCoprologico',
	//Modelos
	'modelo' => 'ExamenCoprologico',
	'modelo_consulta' => 'Consulta',

	//Prefijo de rutas
	'prefijo_ruta' => 'examen_coprologico',
	//vista que carga la informacion
	'vista_descripcion'	=> 'app.view',

	//vista que carga el formulario
	'vista_formulario' => 'app.form',

	//vista que carga listas
	'vista_lista' => 'app.list',

	//vistas secciones
	'formulario' => 'packages.jy.examen_coprologico.formulario',
	'historial_examen_coprologico' => 'packages.jy.examen_coprologico.historial_anamnesis',
];