<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RichmondNyeDoubles2017 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('richmond_nye_doubles_2017', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_name')->unique();
            
            $table->integer('player_A_ID')->unique();
            $table->string('player_A_first_name');
            $table->string('player_A_last_name');

            $table->integer('player_B_ID')->unique();
            $table->string('player_B_first_name');
            $table->string('player_B_last_name');


            $table->timestamps();

            /*
            id
            team_name

            player_A_ID
            player_A_first_name
            player_A_last_name

            player_B_ID
            player_B_first_name
            player_B_last_name
            */
        });
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('richmond_nye_doubles_2017');
    }
}
