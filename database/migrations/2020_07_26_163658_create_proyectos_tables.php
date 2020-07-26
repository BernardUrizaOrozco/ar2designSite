<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectosTables extends Migration
{
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('subtitle', 200)->nullable();
            $table->string('owner', 200)->nullable();
            $table->text('description')->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
             $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('proyecto_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'proyecto');
        });


    }

    public function down()
    {

        Schema::dropIfExists('proyecto_slugs');
        Schema::dropIfExists('proyectos');
    }
}
