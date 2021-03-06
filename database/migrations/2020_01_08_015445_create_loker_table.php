<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('lokasi');
            $table->string('deskripsi');
            $table->string('slug');
            $table->string('nama_perusahaan');
            $table->enum('jenis', ['Internal', 'Umum']);
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->date('deadline');
            $table->bigInteger('bkk_id')->unsigned();
            $table->foreign('bkk_id')->references('id')->on('bkk')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('loker');
    }
}
