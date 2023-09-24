<?php
namespace ArchnaKhiwaliya\FirstPackage\Http\Controllers;

use ArchnaKhiwaliya\FirstPackage\Facades\FirstPackage;
/**
 * 
 */
class HelloController
{
	
	function index()
	{
		return view('first-package::home', ['message'=>FirstPackage::hello()]);
		// return FirstPackage::hello();
	}
}