<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('n_id');
            $table->string('n_name')->unique();
            $table->text('n_description')->nullable();
            $table->text('n_content');
            $table->string('n_img')->nullable();
            $table->integer('n_hotnews')->default(1);
            $table->string('author');
            $table->string('slug')->unique();
            $table->index(['n_name','slug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
