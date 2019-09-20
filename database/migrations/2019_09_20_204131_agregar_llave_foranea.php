<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarLlaveForanea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){

            $table->unsignedInteger('cargo_id');
            $table->foreign('cargo_id')->references('id')->on('cargo');


        });





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users', function(Blueprint $table){
            $table->dropForeign(['cargo_id']);
            $table->dropColumn('cargo_id');

         });

    }
}
