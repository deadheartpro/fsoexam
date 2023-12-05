<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonctionnairesTable extends Migration
{
    public function up()
    {
        Schema::create('fonctionnaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin');
            $table->string('sexe');
            $table->string('type');
            $table->string('etat');
            $table->unsignedBigInteger('id_service');
            $table->foreign('id_service')->references('id')->on('services');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fonctionnaires');
    }
}
