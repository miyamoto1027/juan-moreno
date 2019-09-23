<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// creando una  insercion desde un modelo 
        \App\Cargo::create([

            'nomcargo' =>'desarrollo android',

            'nomcargo' =>'comercial',



        ]);

       /* DB::table('cargos')->insert([

        	


        ]);
          DB::table('cargos')->insert([

            


        ]);*/
    }
}
