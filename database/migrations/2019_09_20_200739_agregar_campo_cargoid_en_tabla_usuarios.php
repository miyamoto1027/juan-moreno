<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCampoCargoidEnTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('cargo');
            $table->unsignedInteger('cargo_id');
        });





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('users', function (Blueprint $table){

        $table->dropColumn('cargo_id');
        $table->string('cargo',100)->nullable()->after('password');


       });
    }
}
