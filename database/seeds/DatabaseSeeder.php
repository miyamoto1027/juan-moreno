<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $this->truncatetables([

                    'users',
                    'cargos',



                         ]);

    	

    	$this->call(cargoSeeder::class);
         $this->call(usuarioSeeder::class);
    }



        // $this->call(UsersTableSeeder::class);

        


        // creo un metodo   y  un  array asociativo para  vaciar  varias   tablas al mismo tiempo 
         protected function truncatetables(array $tables){

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');//DESACTIVA REVISION DE  LLAVES FORANEAS


        foreach ($tables as $table ) {


        	DB::table($table)->truncate();
        }
    	
    	
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');



         }
    
}
