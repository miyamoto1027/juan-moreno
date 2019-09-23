<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	// primera forma de consultar 

    	//$cargos = DB::table('cargos')->select('id')->where('nomcargo','=','comercial')->first();

    	//segunda forma
    	$cargos = DB::table('cargos')
    	->where('nomcargo','comercial')
    	->value('id');

       DB::table('users')->insert([

        	'name' =>'juan manuel',
        	'email'=>'manius1027@hotmail.com',
        	'password'=>bcrypt('123'),
        	'cargo_id'=> $cargos
        	



        ]);
    }
}
