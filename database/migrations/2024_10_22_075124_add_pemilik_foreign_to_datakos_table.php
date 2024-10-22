<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('datakos', function (Blueprint $table) {
        $table->foreignIdFor(App\Models\Pemilik::class)->constrained()->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('datakos', function (Blueprint $table) {
        $table->dropForeign(['pemilik_id']); // Menghapus foreign key saat rollback
        $table->dropColumn('pemilik_id');    // Menghapus kolom pemilik_id
    });
}

};

