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
        Schema::create('historical_item_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('historical_item_id')->constrained('historical_items')->onDelete('cascade');
            $table->string('file_type'); // 'pdf', 'document', etc. (no usaremos 'image' por ahora)
            $table->string('file_path');
            $table->string('file_name');
            $table->string('original_name');
            $table->string('mime_type')->nullable();
            $table->unsignedBigInteger('file_size')->nullable(); // en bytes
            $table->text('description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historical_item_files');
    }
};
