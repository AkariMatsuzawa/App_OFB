<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unique();
            $table->integer('student_id')->unique();
            $table->string('name');
            $table->string('icon');
            $table->string('birthplace');
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
        Schema::dropIfExists('management_lists');
    }
}
