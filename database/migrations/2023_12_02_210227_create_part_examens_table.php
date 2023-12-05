<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartExamensTable extends Migration
{
    public function up()
    {
        Schema::create('part_examens', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->unsignedBigInteger('examen_id');
            $table->unsignedBigInteger('module_id');
            $table->decimal('note', 5, 2);
            $table->foreign('examen_id')->references('id')->on('examens');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('part_examens');
    }
}
