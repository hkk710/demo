<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVazhipadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vazhipads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('vtype');
            $table->string('prathishta');
            $table->string('vname');
            $table->string('phone');
            $table->string('star');
            $table->string('email');
            $table->date('date');
            $table->integer('price');
            $table->string('payment_id');
            $table->string('payment_request_id');
            $table->string('longurl');
            $table->boolean('prasadam')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vazhipads');
    }
}
