<?php

class SiteController extends Controller
{
	/**
	 * Index action is the default action in a controller.
	 */
	public $layout='main';

	function eh_palindromo($numero){
	    return $numero == strrev($numero);
	}

	public function actionIndex()
	{
		if(!empty($_GET["palindromo"])){
			$text = sprintf("'%s' %s é um palindromo", $_GET["palindromo"], ($this->eh_palindromo($_GET["palindromo"])) ? "" : " não ");
		}else{
			$text = "Acesse ?palindromo=tenet";	
		}
		$this->render('site', array('text'=>$text) );
		
	}
}