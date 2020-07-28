<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTables extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('subtitle', 200)->nullable();
            $table->integer('showOnIndex')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->integer('position')->unsigned()->nullable();
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
