<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {

		$table->increments('id')->unsigned();
		$table->integer('message_id',)->unsigned();
		$table->string('address')->nullable()->default('NULL');
		$table->string('latitude');
		$table->string('longitude');
		$table->string('name')->nullable()->default('NULL');
		$table->string('url')->nullable()->default('NULL');
        $table->timestamps();

		$table->foreign('message_id')->references('id')->on('messages');
        });
    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
