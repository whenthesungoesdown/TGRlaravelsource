<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumText('description');
            $table->string('brand');
            $table->integer('price');
            $table->string('category');
            $table->integer('weight')->default(NULL)->nullable();
            $table->string('note')->default(NULL)->nullable();
            $table->string('material')->default(NULL)->nullable();
            $table->binary('pic1')->default(NULL)->nullable();
            $table->binary('pic2')->default(NULL)->nullable();
            $table->binary('pic3')->default(NULL)->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
