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
        Schema::table('historical_item_files', function (Blueprint $table) {
            $table->string('display_name')->nullable()->after('original_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('historical_item_files', function (Blueprint $table) {
            $table->dropColumn('display_name');
        });
    }
};
