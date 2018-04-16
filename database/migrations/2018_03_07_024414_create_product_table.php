<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('product_id');
            $table->integer('fk_category_id');
            $table->integer('idProducer');
            $table->string('p_name');
            $table->text('p_description')->nullable();
            $table->text('p_content')->nullable();
            $table->string('p_img')->nullable();
            $table->float('p_price')->nullable();
            $table->integer('p_hotproduct');
            $table->index(['p_name']);
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
