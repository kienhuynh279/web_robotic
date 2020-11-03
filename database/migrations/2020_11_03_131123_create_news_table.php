<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{

    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('NewId');
            $table->unsignedInteger('UserId');
            $table->string('Title');
            $table->text('Image');
            $table->text('Description')->nullable()->default(null);
            $table->timestamps();   
            $table->tinyInteger('Status')->default('1');

            $table->foreign('UserId')->references('UserId')->on('Users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
