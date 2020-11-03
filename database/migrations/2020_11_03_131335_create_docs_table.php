<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->increments('DocId');
            $table->unsignedInteger('UserId');
            $table->string('Title');
            $table->text('Image');
            $table->text('Description')->nullable()->default(null);
            $table->timestamps();   
            $table->tinyInteger('Status')->default('1');

            $table->foreign('UserId')->references('UserId')->on('Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docs');
    }
}
