<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMacthesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('week_id')->nullable();
            $table->integer('home')->nullable()->comment('home team_id');
            $table->integer('away')->nullable()->comment('away team_id');
            $table->integer('home_goal')->default(0);
            $table->integer('away_goal')->default(0);
            $table->boolean('played')->default(0);
            $table->unique(['week_id','away'], 'week_id');
            $table->unique(['week_id','home'], 'week_id_2');
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
        Schema::dropIfExists('matches');
    }
}
