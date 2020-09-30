<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::table('events', function ($table) {
=======
        Schema::table('events', function (Blueprint $table) {
>>>>>>> a423e430... To Do:
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::table('events', function ($table) {
=======
        Schema::table('events', function (Blueprint $table) {
>>>>>>> a423e430... To Do:
            $table->dropColumn('user_id');
        });
    }
}
