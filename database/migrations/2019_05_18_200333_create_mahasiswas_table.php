<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_mahasiswa');
            $table->integer('nim');
            $table->string('kode_prodi', 3);
            $table->string('semester', 4);
            $table->date('tanggal_lahir');	
            $table->text('alamat');
            $table->string('no_telepon', 16);
            $table->timestamps();

            $table->foreign('kode_prodi')
                ->references('kode_prodi')->on('program_studi')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
