<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('message_id');
            $table->integer('size');
            $table->string('url');
            $table->string('caption')->nullable();
            $table->string('fileName')->nullable();
            $table->string('mimeType');
            $table->string('pageCount')->nullable();
            $table->string('title')->nullable();
            $table->string('height')->nullable();
            $table->string('seconds')->nullable();
            $table->tinyInteger('is_voice')->nullable();
            $table->string('type');
            $table->timestamps();

            $table->foreign('message_id')->references('id')->on('messages');
        });
    }

    public function down()
    {
        Schema::dropIfExists('media');
    }
}
