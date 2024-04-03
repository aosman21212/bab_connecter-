<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedCrescentsTable extends Migration
{
    public function up()
    {
        Schema::create('red_crescents', function (Blueprint $table) {

		$table->increments('id')->unsigned();
		$table->integer('client_id',)->unsigned();
		$table->integer('conversation_id',)->unsigned();
		$table->string('ticket_id');
		$table->string('ticket_id_new')->nullable()->default('NULL');
		$table->tinyInteger('is_open')->default('1');
        $table->timestamps();

		$table->foreign('client_id')->references('id')->on('clients');		$table->foreign('conversation_id')->references('id')->on('conversations');
        });
    }

    public function down()
    {
        Schema::dropIfExists('red_crescents');
    }
}