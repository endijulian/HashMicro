<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStnkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stnk', function (Blueprint $table) {
            $table->id();
            $table->string('no_stnk');
            $table->integer('jenis_kendaraans_id');
            $table->string('silinder');
            $table->string('tnkb');
            $table->string('pkb');
            $table->string('nama_stnk');
            $table->string('nilai_pajak_stnk');
            $table->string('no_polisi');
            $table->string('model');
            $table->string('no_mesin');
            $table->string('swdkllj');
            $table->string('bahan_bakar');
            $table->string('warna');
            $table->string('pajak_jasa');
            $table->string('merk');
            $table->string('no_rangka');
            $table->date('masa_berlaku');
            $table->string('jasa_perpanjang');
            $table->integer('tahun_kendaraan');
            $table->string('no_bpkb');
            $table->date('pajak_stnk');
            $table->integer('status_id');
            $table->integer('users_id');


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
        Schema::dropIfExists('stnk');
    }
}
