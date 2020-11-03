<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('CategoryId');
            $table->string('Title');
            $table->timestamps();   
            $table->tinyInteger('Status')->default('1');
        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
}
