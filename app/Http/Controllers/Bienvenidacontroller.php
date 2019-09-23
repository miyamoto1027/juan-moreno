<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bienvenidacontroller extends Controller
{



	public function __invoke($nombre,$apodo = null)
	{
		if ($apodo) {
	return 'bienvenido '.$nombre.'y tu  apodo  es :'.$apodo;	

	}else{
		return 'hola : '.$nombre;
	}
    
	}
}
