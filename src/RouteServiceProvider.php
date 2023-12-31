<?php

namespace ArchnaKhiwaliya\FirstPackage;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
/**
 * 
 */
class RouteServiceProvider extends ServiceProvider
{
	
	protected $namespace = 'ArchnaKhiwaliya\FirstPackage\Http\Controllers';

	public function map()
	{
		Route::namespace($this->namespace)
			->group(__DIR__.'/../routes/web.php');
	}

}