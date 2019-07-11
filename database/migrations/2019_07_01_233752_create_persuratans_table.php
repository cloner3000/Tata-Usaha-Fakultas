<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersuratansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persuratan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nim_mahasiswa');
            $table->string('nomor_surat');
            $table->string('kode_surat');
            $table->bigInteger('detail_surat');
            $table->string('status');
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
        Schema::dropIfExists('persuratan');
    }
}
