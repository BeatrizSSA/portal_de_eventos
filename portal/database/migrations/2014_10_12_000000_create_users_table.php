<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50);
            $table->string('password');
            $table->string('role', 20);
            $table->string('name');
            $table->string('gender', 50);
            $table->integer('phone', 9);
            $table->dateTime('birthday');
            $table->string('email')->unique();
            $table->string('zip_code', 9);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('street', 100);
            $table->string('state', 100);
            $table->integer('cell_phone', 9);
            $table->string('complement', 100);
            $table->string('degree_of_education', 100);
            $table->string('educational_institution', 100);
            $table->string('company', 100);
            $table->dateTime('created');
            $table->dateTime('modified');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
