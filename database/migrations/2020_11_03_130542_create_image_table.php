<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->increments('ImageId');
            $table->text('Alt')->nullable()->default(null);
            $table->text('Src')->nullable()->default(null);
            $table->timestamps();   
            $table->tinyInteger('Status')->default('1');
        });
    }

    public function down()
    {
        Schema::dropIfExists('image');
    }
}
