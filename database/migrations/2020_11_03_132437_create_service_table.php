<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->increments('ServiceId');
            $table->unsignedInteger('TypeId')->unsigned();
            $table->string('Title');
            $table->text('Image');
            $table->text('Description')->nullable()->default(null);
            $table->timestamps();   
            $table->tinyInteger('Status')->default('1');
            $table->foreign('TypeId')->references('TypeId')->on('Type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service');
    }
}
