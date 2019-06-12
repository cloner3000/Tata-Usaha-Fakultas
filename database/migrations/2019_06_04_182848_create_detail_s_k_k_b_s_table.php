<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailSKKBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_skkb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mahasiswa_id');
            $table->string('keperluan', 50);
            $table->timestamps();

            $table->foreign('mahasiswa_id')
                ->references('id')->on('mahasiswa')
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
        Schema::dropIfExists('detail_skkb');
    }
}
