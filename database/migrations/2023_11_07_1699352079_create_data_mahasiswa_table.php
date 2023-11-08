<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('data_mahasiswa', function (Blueprint $table) {

		$table->increments(id_mahasiswa);
		$table->string('nim',15)->nullable()->default('NULL');
		$table->string('first_name',64)->nullable()->default('NULL');
		$table->string('last_name',64)->nullable()->default('NULL');
		$table->string('jenkel',12)->nullable()->default('NULL');
		$table->string('email',64)->nullable()->default('NULL');
		$table->text('alamat')->nullable()->default('NULL');
		$table->string('fakultas',64)->nullable()->default('NULL');
		$table->string('prodi',64)->nullable()->default('NULL');
		$table->text('link_gambar_profil')->nullable()->default('NULL');
		$table->primary('id_mahasiswa');

        });
    }

    public function down()
    {
        Schema::dropIfExists('data_mahasiswa');
    }
}