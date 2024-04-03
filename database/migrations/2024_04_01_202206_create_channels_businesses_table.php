<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelsBusinessesTable extends Migration
{
    public function up()
    {
        Schema::create('channels_businesses', function (Blueprint $table) {

		$table->increments('id')->unsigned();
		$table->integer('business_id',)->unsigned();
		$table->integer('channel_id',)->unsigned();
		$table->string('business_contact_id');
        $table->timestamps();

		$table->foreign('business_id')->references('id')->on('businesses');		$table->foreign('channel_id')->references('id')->on('channels');
        });
    }

    public function down()
    {
        Schema::dropIfExists('channels_businesses');
    }
}