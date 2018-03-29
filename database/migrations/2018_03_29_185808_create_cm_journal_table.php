<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmJournalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cm_journal', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('jPublishDate');
            $table->string('jData');
            $table->integer('jAuthorId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cm_journal');
    }
}
