<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguePongerPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_ponger', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('league_id')->unsigned()->index();
            $table->foreign('league_id')->references('id')->on('leagues')->onDelete('cascade');

            $table->integer('ponger_id')->unsigned()->index();
            $table->foreign('ponger_id')->references('id')->on('pongers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('league_ponger');
    }
}
