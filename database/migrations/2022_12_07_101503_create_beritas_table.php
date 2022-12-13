<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()
                  ->constrained()
                  ->onDelete('set null')
                  ->onUpdate('cascade');
            $table->foreignId('kategori_id')->nullable()
                  ->constrained()
                  ->onDelete('set null')
                  ->onUpdate('cascade');
            $table->string('nama');
            $table->string('judul');
            $table->string('foto');
            $table->dateTime('tanggal');
            $table->text('deskripsi');
            $table->enum('status', ['Publish', 'Pending'])->default('Pending');
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
        Schema::dropIfExists('beritas');
    }
};
