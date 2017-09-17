<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('alamat');
            $table->string('kota');
            $table->string('telepon');
            $table->string('ponsel');
            $table->string('ktp');
            $table->string('sim');
            $table->string('pekerjaan');
            $table->string('nama_perusahaan');
            $table->string('telepon_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('metode_pembayaran');
            $table->string('path_ktp')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
