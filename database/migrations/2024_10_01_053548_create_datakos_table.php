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
        Schema::create('datakos', function (Blueprint $table) {
            $table->id();
            $table->string('namakosan');
            $table->integer('kamar_tersedia');
            $table->enum('jeniskos', ['Putra', 'Putri','Campur']);
            $table->date('tenggat_pembayaran');
            $table->boolean('tersedia')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datakos');
    }
};
