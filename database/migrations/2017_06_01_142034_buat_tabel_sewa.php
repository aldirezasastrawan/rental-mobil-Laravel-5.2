<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelSewa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->nullable();
            $table->unsignedInteger('mobil_id')->nullable();
            $table->string('tanggal');
            $table->string('tarif_sewa');
            $table->timestamps();
        });

        Schema::create('mobil', function($tabel) {
            $tabel->increments('id');
            $tabel->string('plat_nomor');
            $tabel->string('nama_mobil');
            $tabel->string('jenis_mobil');
            $tabel->string('tarif_sewa');
            $tabel->timestamps();
        });

        Schema::create('customer', function($tabel) {
            $tabel->increments('id');
            $tabel->string('nama');
            $tabel->integer('usia');
            $tabel->string('jenis_kelamin');
            $tabel->string('alamat');
            $tabel->string('telepon');
            $tabel->string('email');
            $tabel->timestamps();
        });

        Schema::table('sewa',function(Blueprint $kolom){

            $kolom->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade')->onUpdate('cascade');
            $kolom->foreign('mobil_id')->references('id')->on('mobil')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sewa');
        Schema::drop('mobil');
        Schema::drop('customer');
    }
}
