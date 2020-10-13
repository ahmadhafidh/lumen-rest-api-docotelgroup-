<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('produk', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga');
            $table->string('warna');
            $table->enum('kondisi', ['baru', 'lama']);
            $table->longText('deskripsi')->nullable;
            $table->timestamps();
        });
//         -id 
// -nama (varchar)
// -harga (integer)
// -warna (varchar)
// -kondisi (enum: baru, lama)
// -deskripsi (text)
// -created_at
// -updated_at
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
