<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrathishtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prathishtas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        DB::table('prathishtas')->insert(
          ['name' => 'Sreekrishnaswamy']
        );
        DB::table('prathishtas')->insert(
          ['name' => 'Ganapathy']
        );
        DB::table('prathishtas')->insert(
          ['name' => 'Devi']
        );
        DB::table('prathishtas')->insert(
          ['name' => 'Nagar']
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prathishtas');
    }
}
