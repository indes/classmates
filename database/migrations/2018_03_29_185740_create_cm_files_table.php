<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cm_files', function (Blueprint $table) {
            $table->increments('fileid');
            $table->integer('classid');
            $table->integer('userid');
            $table->string('path');
            $table->string('status');
            $table->string('name');
            $table->integer('size');
            $table->string('type');
            $table->datetime('created_at');
            $table->datetime('updated_at');
            
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cm_files');
    }
}
