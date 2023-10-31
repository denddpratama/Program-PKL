<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fsurat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_instansi');
            $table->string('nip');
            $table->string('perihal');
            $table->string('alamat_pemohon');
            $table->string('no_telepon');
            $table->string('lampiran_surat');
            $table->string('status')->nullable();
            $table->date('pengambilan')->nullable();
            $table->boolean('delstatus')->default(true);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fsurat');
    }
};
