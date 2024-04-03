<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {

		$table->increments('id')->unsigned();
		$table->string('business_name');
		$table->string('username');
		$table->string('password');
		$table->string('business_phone')->nullable()->default('NULL');
		$table->string('provider');
		$table->text('token');
		$table->text('permanent_token');
		$table->string('bot_domain')->nullable()->default('NULL');
		$table->string('third_party')->nullable()->default('NULL');
		$table->text('third_party_verify_token');
        $table->timestamps();
        ;

        });
    }

    public function down()
    {
        Schema::dropIfExists('businesses');
    }
};