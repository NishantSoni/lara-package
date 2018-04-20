<?php 

namespace ArtisanRemover;

use Illuminate\Support\ServiceProvider;

class ArtisanRemoverServiceProvider extends ServiceProvider
{
	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
	    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
	}

	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function register()
	{
	   
	}
}



?>