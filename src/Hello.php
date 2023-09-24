<?php

namespace ArchnaKhiwaliya\FirstPackage;

class Hello{

	protected $name;

	// public function __construct($name = 'Archna Khiwaliya'){
	// 	$this->name = $name;
	// }


	public function hello($name = 'Archna Khiwaliya'){
		return "This is first class in my fisrt package with name variable: {$name}";
	}

}