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
    	

        DB::table('cargos')->insert([

        	'nomcargo' =>'desarrollo android',


        ]);
          DB::table('cargos')->insert([

            'nomcargo' =>'comercial',


        ]);
    }
}
