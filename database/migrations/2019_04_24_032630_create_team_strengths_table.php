<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamStrengthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_strengths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team_id')->nullable();
            $table->boolean('is_home')->nullable()->default(0);
            $table->enum('strength', array('weak','average','strong'))->nullable();
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
        Schema::dropIfExists('team_strengths');
    }
}
