<?php

namespace ArchnaKhiwaliya\FirstPackage\Tests\Feature;

use ArchnaKhiwaliya\FirstPackage\Tests\TestCase;

/**
 * 
 */
class CanGetTheMessageTest extends TestCase
{
	
	/** @test */
	function can_get_the_message()
	{
		
		// $this->withoutExceptionHandling();
		$this->get('hello-route')->assertSee("Archna Khiwaliya");
		// $this->get('hello-route')->assertSuccessful();
	}


	/** @test */
	function can_get_the_message_through_a_view()
	{
		
		// $this->withoutExceptionHandling();
		$this->get('hello-route')->assertViewIs("first-package::home");
		// $this->get('hello-route')->assertSuccessful();
	}


}