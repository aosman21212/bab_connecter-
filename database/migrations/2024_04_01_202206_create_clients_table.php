<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {

		$table->increments('id')->unsigned();
		$table->string('whatsapp')->nullable()->default('NULL');
		$table->string('facebook')->nullable()->default('NULL');
		$table->string('instagram')->nullable()->default('NULL');
		$table->string('gbm')->nullable()->default('NULL');
		$table->string('client_name')->nullable()->default('NULL');
		$table->string('language')->default('ar');
        $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}