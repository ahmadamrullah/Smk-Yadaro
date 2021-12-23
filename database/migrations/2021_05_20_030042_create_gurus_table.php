<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip', 50);
            $table->string('nama', 100);
            $table->string('alamat', 100);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('jk', 10);
            $table->string('status', 20);
            $table->string('pendidikan', 50);
            $table->string('email', 100);
            $table->string('nohp', 50);
            $table->string('image', 100)->nullable();
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('pelajaran_id');
            $table->timestamps();

            $table->foreign('jabatan_id')->references('id')->on('jabatans')->onDELETE('CASCADE');
            $table->foreign('pelajaran_id')->references('id')->on('pelajarans')->onDELETE('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
