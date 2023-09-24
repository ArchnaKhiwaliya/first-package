<?php
namespace ArchnaKhiwaliya\FirstPackage\Tests;

use ArchnaKhiwaliya\FirstPackage\Facades\FirstPackage;
use ArchnaKhiwaliya\FirstPackage\FirstPackageServiceProvider;
use ArchnaKhiwaliya\FirstPackage\RouteServiceProvider;

/**
 * 
 */
class TestCase extends \Orchestra\Testbench\TestCase
{
	
	protected function getPackageProviders($app){

		return [
			FirstPackageServiceProvider::class,
			RouteServiceProvider::class
		];

	}


	protected function getPackageAliases($app){
		return [
			'FirstPackage' => \ArchnaKhiwaliya\FirstPackage\Facades\FirstPackage::class
		];
	}
}