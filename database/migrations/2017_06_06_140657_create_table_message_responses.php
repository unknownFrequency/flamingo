<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMessageResponses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('body');
            $table->integer('message_id')->references('id')->on('messages')->unsigned();
            $table->integer('responder_id')->references('id')->on('users')->unsigned();
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
        Schema::dropIfExists('message_responses');
    }
}
