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
        Schema::create('news_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wp_id')->nullable();
            $table->unsignedInteger('count')->default(0);
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('description')->default('');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        // tabla multivaluada
        Schema::create('news_category_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained()->onDelete('cascade');
            $table->foreignId('news_category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        // cambiar columna summary a text
        Schema::table('news', function (Blueprint $table) {
            $table->text('summary')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_category_news');
        Schema::dropIfExists('news_categories');
    }
};
