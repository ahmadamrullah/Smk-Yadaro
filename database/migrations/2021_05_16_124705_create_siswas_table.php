<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis', 100);
            $table->string('nisn', 100);
            $table->string('nama', 200);
            $table->string('alamat', 150);
            $table->string('jk', 50);
            $table->string('tempat_lahir', 100);
            $table->date('tgl_lahir');
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('jurusan_id');
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('kelas')->onDELETE('CASCADE');
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDELETE('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
