<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
			
	    $this->app->bind(
			'App\ARep\Repositories\IAtendimentoRepository',
			'App\ARep\Repositories\AtendimentoRepository'
		);

	    $this->app->bind(
			'App\ARep\Repositories\IOrcamentoRepository',
			'App\ARep\Repositories\OrcamentoRepository'
		);

		$this->app->bind(
			'App\ARep\Repositories\IClinicaRepository',
			'App\ARep\Repositories\ClinicaRepository'
		);

		$this->app->bind(
			'App\ARep\Repositories\IPacienteRepository',
			'App\ARep\Repositories\PacienteRepository'
		);

		$this->app->bind(
			'App\ARep\Repositories\IDashboardRepository',
			'App\ARep\Repositories\DashboardRepository'
		);

		$this->app->bind(
			'App\ARep\Repositories\IUserRepository',
			'App\ARep\Repositories\UserRepository'
		);

		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);


	}

}
