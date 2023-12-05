<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocsTable extends Migration
{
    public function up()
    {
        Schema::create('blocs', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->notNull();
            // Add other columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blocs');
    }
}
