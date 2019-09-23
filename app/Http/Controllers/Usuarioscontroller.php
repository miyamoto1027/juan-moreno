<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuarioscontroller extends Controller
{
    public function index()
    {
    	if (request()->has('empty')){
    	  $usuarios =[];
    	
    	}else{
    		$usuarios =[

    		'juan',
    		'manuel',
    		'moreno',
    		'<script>alert("entrar"); </script>'

    	];

    	}

    	
       
       return view('usuarios',[

       	'usuarios'=> $usuarios,
       	'titulo' => 'lista de usuarios'



       ]);
    }

    public function ver($id)
    {
    	 return "usuarios con la pagina {$id}";
    }
    public function crear()
    {
    	 return 'hola nuevo usuario';
    }

   








}
