<?php namespace Jy\ExamenCoprologico;

use Illuminate\Support\ServiceProvider;
use Jy\ExamenCoprologico\Repo\EloquentExamenCoprologico;
use Jy\Consulta\Repo\EloquentConsulta;

class ExamenCoprologicoServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('jy/examen-coprologico');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Jy\ExamenCoprologico\Repo\ExamenCoprologicoInterface', function($app){
			return new EloquentExamenCoprologico(
		 		$app,
		 		$app->make('Jy\Consulta\Repo\ConsultaInterface')
		 	);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
