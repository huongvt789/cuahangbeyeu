<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('order_id');
            $table->dateTime('ngaymua')->nullable();
            $table->float('thanhtien')->nullable();
            $table->string('ten')->nullable();
            $table->string('sdt')->nullable();
            $table->string('diachi')->nullable();
            $table->integer('status')->nullable();
            $table->integer('httt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
