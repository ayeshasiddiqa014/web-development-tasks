<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('movies', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->integer('year');
        $table->string('director');
        $table->text('synopsis'); 
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('movies');
}

};
