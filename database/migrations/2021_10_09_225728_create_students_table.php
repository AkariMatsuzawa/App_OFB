<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->unique();
            $table->string('birthplace');
            $table->string('birthdate');
            $table->string('phone')->unique();
            $table->string('univercity');
            $table->string('faculty');
            $table->string('subject');
            $table->integer('year');
            $table->string('club_activities')->nullable();
            $table->string('qualification')->nullable();
            $table->string('p_language')->nullable();
            $table->string('gender');
            $table->string('highschool');
            $table->string('icon')->nullable();
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
        Schema::dropIfExists('students');
    }
}
