<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalsTable extends Migration
{
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->notNull();
            $table->integer('capacite_Ens');
            $table->integer('capacite_Fon');
            $table->integer('capacite_Etu');
            $table->string('etage');
            $table->unsignedBigInteger('bloc_id');
            $table->foreign('bloc_id')->references('id')->on('blocs');
            // Add other columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('locals');
    }
}
