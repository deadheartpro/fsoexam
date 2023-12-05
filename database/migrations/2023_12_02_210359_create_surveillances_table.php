<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveillancesTable extends Migration
{
    public function up()
    {
        Schema::create('surveillances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surveillant_id');
            $table->unsignedBigInteger('part_examen_id');
            $table->string('type')->notNull();
            $table->foreign('surveillant_id')->references('id')->on('fonctionnaires');
            $table->foreign('part_examen_id')->references('id')->on('part_examens');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surveillances');
    }
}
