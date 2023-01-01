<?php

namespace App\Classes;

class Libreria
{
    public function factorial( $value )
    {
		
		
		
		if ( ! is_numeric( $value )) 
			    throw new \Exception('Numero no entero');
        if ( ! is_int( $value )) 
			    throw new \Exception('Numero no entero');
		if (   $value < 0  ) 
		        throw new \Exception('Numero no entero');
    	
		if( $value == 0 ) $factorial =  1;
		else
		{
			$factorial = 1;
			for( $i = 1; $i < $value; $i++ )
			{
				$factorial = $factorial * $i;
			}
		}	
		return $factorial;
	}
}

$a = new Libreria();

echo $a->factorial( -5 );

