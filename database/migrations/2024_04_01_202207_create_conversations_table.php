<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationsTable extends Migration
{
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {

		$table->increments('id')->unsigned();
		$table->string('conversation_id')->nullable()->default('NULL');
		$table->integer('business_id',)->unsigned();
		$table->integer('channel_id',)->unsigned();
		$table->integer('client_id',)->unsigned();
		$table->string('status')->default('1');
	            $table->timestamps();

		$table->foreign('business_id')->references('id')->on('businesses');		$table->foreign('channel_id')->references('id')->on('channels');		$table->foreign('client_id')->references('id')->on('clients');
        });
    }

    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}