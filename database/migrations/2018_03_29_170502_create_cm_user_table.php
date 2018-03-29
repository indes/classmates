<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cm_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName');
            $table->string('stuName');
            $table->integer('stuNum');
            $table->integer('stuSex');
            $table->binary('stuImg');
            $table->integer('stuQQ');
            $table->integer('stuPhone');
            $table->string('stuBio');
            $table->integer('stuClassId');
            $table->string('email');
            $table->string('password');
            $table->integer('isadmin');
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
        Schema::drop('cm_user');
    }
}
