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
        Schema::table('players', function (Blueprint $table) {
            $table->index('position');
            $table->index('height');
            $table->index('matches');
            $table->index('soka_score');
            $table->index('attacking');
            $table->index('age');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropIndex(['position', 'height', 'age', 'matches', 'soka_score', 'attacking']);
        });
    }
};
