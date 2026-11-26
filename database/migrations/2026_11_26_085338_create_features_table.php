<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('features', function (Blueprint $table) {

            $table->id();

            // Informasi fitur
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');

            // Tampilan fitur
            $table->string('icon')->nullable();
            $table->string('icon_color', 20)->default('#FF4B12');
            $table->string('image')->nullable();

            // Pengaturan publikasi
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            // Waktu pembuatan dan perubahan
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};