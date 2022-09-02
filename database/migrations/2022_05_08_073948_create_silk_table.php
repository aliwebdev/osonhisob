<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSilkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('silk', function (Blueprint $table) {
            $table->id();
            $table->string('olindi');
            $table->string('m_narxi');
            $table->string('berilgan_summa');
            $table->string('birligi');
            $table->string('d_qiymati');
            $table->string('qancha_miqdor');
            $table->string('miqdor_birlig');
            $table->date('o_sana');
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
        Schema::dropIfExists('silk');
    }
}
