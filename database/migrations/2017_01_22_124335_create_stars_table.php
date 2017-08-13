<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('star');
            $table->timestamps();
        });
        DB::table('stars')->insert(
          ['star' => 'Ashwathi']
        );
        DB::table('stars')->insert(
          ['star' => 'Bharani']
        );
        DB::table('stars')->insert(
          ['star' => 'Karthika']
        );
        DB::table('stars')->insert(
          ['star' => 'Rohini']
        );
        DB::table('stars')->insert(
          ['star' => 'Makayeeram']
        );
        DB::table('stars')->insert(
          ['star' => 'Thiruvathira']
        );
        DB::table('stars')->insert(
          ['star' => 'Punartham']
        );
        DB::table('stars')->insert(
          ['star' => 'Pooyam']
        );
        DB::table('stars')->insert(
          ['star' => 'Aaylliyam']
        );
        DB::table('stars')->insert(
          ['star' => 'Makam']
        );
        DB::table('stars')->insert(
          ['star' => 'Pooram']
        );
        DB::table('stars')->insert(
          ['star' => 'Utharam']
        );
        DB::table('stars')->insert(
          ['star' => 'Atham']
        );
        DB::table('stars')->insert(
          ['star' => 'Chithira']
        );
        DB::table('stars')->insert(
          ['star' => 'Chothi']
        );
        DB::table('stars')->insert(
          ['star' => 'Vishakam']
        );
        DB::table('stars')->insert(
          ['star' => 'Anizham']
        );
        DB::table('stars')->insert(
          ['star' => 'Ketta']
        );
        DB::table('stars')->insert(
          ['star' => 'Moolam']
        );
        DB::table('stars')->insert(
          ['star' => 'Pooradam']
        );
        DB::table('stars')->insert(
          ['star' => 'Utharadam']
        );
        DB::table('stars')->insert(
          ['star' => 'Thiruvonam']
        );
        DB::table('stars')->insert(
          ['star' => 'Avittam']
        );
        DB::table('stars')->insert(
          ['star' => 'Chathayam']
        );
        DB::table('stars')->insert(
          ['star' => 'Puroorttathi']
        );
        DB::table('stars')->insert(
          ['star' => 'Uthrttathi']
        );
        DB::table('stars')->insert(
          ['star' => 'Revathi']
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stars');
    }
}
