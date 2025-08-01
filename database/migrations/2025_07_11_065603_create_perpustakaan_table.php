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
      Schema::create('perpustakaan', function (Blueprint $table) {
    $table->id();
    $table->string('nama_perpustakaan');
    $table->text('alamat');
    $table->string('telepon');
    $table->enum('kategori', ['Negeri', 'Swasta']);
    $table->decimal('latitude', 10, 7);
    $table->decimal('longitude', 10, 7);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpustakaan');
    }
};
