<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Staff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string("hodim_ismi");
            $table->integer("hodim_yoshi");
            $table->string("ish_turi");
            $table->string("oyligi");
            $table->string("avans");
            $table->string("ish_vaqti");
            $table->string("qilgan_ish_turi");
            $table->string("qilgan_ish_dona");
            $table->string("qilgan_ish_summa");
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
        Schema::dropIfExists('staff');
    }
}
