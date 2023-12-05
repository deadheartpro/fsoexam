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
        Schema::create('filoc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('local_id');
            $table->unsignedBigInteger('filier_id');
            $table->integer('annee');
            $table->timestamps();

            // Foreign keys
            $table->foreign('local_id')->references('id')->on('locals');
            $table->foreign('filier_id')->references('id')->on('filieres');

            // Unique constraint
            $table->unique(['local_id', 'filier_id', 'annee']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filoc');
    }
};
