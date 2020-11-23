<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->increments('ApplicationId');
            $table->string('Title');
            $table->text('Icon')->nullable();
            $table->text('Color')->nullable()->default("#000000");
            $table->text('Description')->nullable()->default(null);
            $table->timestamps();   
            $table->tinyInteger('Status')->default('1');
        });
    }

    public function down()
    {
        Schema::dropIfExists('application');
    }
}
