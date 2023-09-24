<?php
namespace ArchnaKhiwaliya\FirstPackage\Tests\Unit;
use ArchnaKhiwaliya\FirstPackage\Facades\FirstPackage;
use ArchnaKhiwaliya\FirstPackage\Tests\TestCase;
// use Orchestra\Testbench\TestCase;
/**
 * 
 */
class HelloTest extends TestCase
{
	

	/** @test */
	function it_returns_the_message()
	{
		$this->assertEquals(
			"This is first class in my fisrt package with name variable: Archna Khiwaliya",
			FirstPackage::hello()
		);


		$this->assertEquals(
			"This is first class in my fisrt package with name variable: Lalit Tawar",
			FirstPackage::hello('Lalit Tawar')
		);
	}
}