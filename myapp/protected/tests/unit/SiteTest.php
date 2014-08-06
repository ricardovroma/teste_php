<?php

class SiteTest extends MyCTestCase
{
	function eh_palindromo($numero){
	    return $numero == strrev($numero);
	}
	
    public function test_eh_palindromo_um_digito(){
        $this->assertEquals($this->eh_palindromo(7), true);
    }

    public function test_10_nao_eh_palindromo(){
        $this->assertEquals($this->eh_palindromo(10), false);
    }

    public function test_9_eh_palindromo(){
        $this->assertEquals($this->eh_palindromo(9), true);
    }

    public function test_13_nao_eh_palindromo(){
        $this->assertEquals($this->eh_palindromo(13), false);
    }
}
