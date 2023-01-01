<?php

use PHPUnit\Framework\TestCase;
use App\Classes\Libreria;

class LibreriaTest extends TestCase
{
    public function test_factorial_no_entero_0()
    {
    
		$this->expectException(Exception::class);
	    $this->expectExceptionMessage('Numero no entero');
	    $libreria = new Libreria();
		$libreria->factorial( "test");
	}
	public function test_factorial_no_entero_1()
    {
    
		$this->expectException(Exception::class);
	    $this->expectExceptionMessage('Numero no entero');
	    $libreria = new Libreria();
		$libreria->factorial( 5.9 );
	}
	public function test_factorial_no_entero_2()
    {
    
		$this->expectException(Exception::class);
	    $this->expectExceptionMessage('Numero no entero');
	    $libreria = new Libreria();
		$libreria->factorial( -5 );
	}
	
	
	public function test_factorial_1()
    {
        $libreria = new Libreria();
		$result = $libreria->factorial( 5 );
        $this->assertEquals(24, $result);
    }
	
	public function test_factorial_2()
    {
        $libreria = new Libreria();
		$result = $libreria->factorial( 0 );
        $this->assertEquals(1, $result);
    }
}