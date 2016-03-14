<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->increments('id_anak');
            $table->varchar('id_donatur',60);
            $table->varchar('id_tingkatan',60);
            $table->varchar('id_kecamatan',60);
            $table->varchar('status_anak',60);
            $table->string('nama_anak',60);
            $table->string('gender_anak',60);
            $table->string('tmpt_lahir',60);
            $table->date(dd/mm/yy)('tgl_lahir');
            $table->varchar('anak_ke',10);
            $table->string('jml_saudara',60);
            $table->varchar('alamat_anak';
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->varchar('nama_sekolah');
            $table->varchar('alamat_sekolah');
            $table->string('kelas');
            $table->int('rapot1');
            $table->int('rapot2');
            $table->string('sholat');
            $table->string('ngaji');
            $table->string('kemampuan');
            $table->string('kondisi_rmh');
            $table->string('dinding_rmh');
            $table->string('status_rmh');
            $table->string('status_keluarga');
            $table->date(ss/mm/yy)('tgl_daftar');
            //foto anak
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
        Schema::drop('anak');
    }
}
