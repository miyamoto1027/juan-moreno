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
       DB::table('users')->insert([

        	'name' =>'juan manuel',
        	'email'=>'manius1027@hotmail.com',
        	'password'=>bcrypt('123'),
        	



        ]);
    }
}
