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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->decimal('budget_iklan', 10, 2);
            $table->integer('lead');
            $table->integer('closing');
            $table->integer('botol');
            $table->decimal('omset', 12, 2);
            $table->decimal('target_omset', 12, 2);
            $table->string('nama_produk');
            $table->string('nama_divisi');
            $table->string('pt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
