<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('ProductId');
            $table->unsignedInteger('CategoryId');
            $table->string('Title');
            $table->text('Image');
            $table->text('Specification')->nullable()->default(null);
            $table->text('Dimension')->nullable()->default(null);
            $table->text('Application')->nullable()->default(null);
            $table->text('Description')->nullable()->default(null);
            $table->timestamps();   
            $table->tinyInteger('Status')->default('1');

            $table->foreign('CategoryId')->references('CategoryId')->on('Category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
