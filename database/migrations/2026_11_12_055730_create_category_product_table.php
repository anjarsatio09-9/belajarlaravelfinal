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
        Schema::create('category_product', function (Blueprint $table) {
            // Sesuai dengan instruksi soal:
            $table->id('id_category'); // Bikin primary key auto-increment dengan nama id_category
            $table->string('category_name'); // Bikin kolom string (varchar)
            $table->text('description'); // Bikin kolom tipe text
            $table->timestamps(); // Otomatis bikin kolom created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_product');
    }
};