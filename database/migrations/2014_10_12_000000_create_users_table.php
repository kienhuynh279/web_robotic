<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('UserId');
            $table->string('Email')->unique();
            $table->string('Name');
            $table->string('Gender')->nullable()->default('NULL');
            $table->date('Birthday')->nullable();
            $table->string('Password');
            $table->text('Image')->nullable()->default('NULL');
            $table->timestamps();
            $table->tinyInteger('Status')->default('1');
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
