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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->foreignId('team_id')->constrained('teams');
            $table->string('position');
            $table->unsignedFloat('height');
            $table->unsignedInteger('matches');
            $table->unsignedFloat('soka_score');
            $table->unsignedFloat('attacking');
            $table->unsignedFloat('defensive');
            $table->unsignedFloat('passing');
            $table->unsignedFloat('possession');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
