<?php
/**
* executar teste
* @example $ phpunit --colors palindromo_test.php
* @fonte http://phpunit.de
*/
require_once("palindromo.php");

class PalindromoTest extends PHPUnit_Framework_TestCase
{
    public function test_eh_palindromo_um_digito(){
        $this->assertEquals(eh_palindromo(7), true);
    }

    public function test_10_nao_eh_palindromo(){
        $this->assertEquals(eh_palindromo(10), false);
    }

    public function test_9_eh_palindromo(){
        $this->assertEquals(eh_palindromo(9), true);
    }

    public function test_13_nao_eh_palindromo(){
        $this->assertEquals(eh_palindromo(13), false);
    }   
}
?>