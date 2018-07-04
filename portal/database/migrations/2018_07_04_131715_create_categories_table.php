<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lecture', 100);
            $table->string('short_course', 100);
            $table->string('workshop', 100);
            $table->string('scientific_work_show', 100);
            $table->string('technical_skills_competition', 100);
            $table->string('nerd_room', 100);
            $table->string('electronic_games', 100);
            $table->dateTime('created');
            $table->dateTime('modified');
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
        Schema::dropIfExists('categories');
    }
}
