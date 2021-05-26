<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetaniBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petani_barang', function (Blueprint $table) {
            $table->id();
            $table->integer('petani_id');
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->string('harga', 25);
            $table->foreign('petani_id')->references('id_petani')->on('datapetani')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barang')->onDelete('cascade');
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
        Schema::dropIfExists('petani_barang');
    }
}
