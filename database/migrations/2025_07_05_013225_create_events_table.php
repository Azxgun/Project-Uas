<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Primary key

            $table->string('name');             // Nama mata kuliah
            $table->string('lecturer')->nullable(); // Nama dosen (boleh kosong)
            $table->string('location')->nullable(); // Lokasi kuliah (boleh kosong)
            $table->string('color')->nullable();    // Warna event (opsional)

            $table->dateTime('starts_at');      // Tanggal & waktu mulai kuliah
            $table->dateTime('ends_at');        // Tanggal & waktu selesai kuliah

            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
