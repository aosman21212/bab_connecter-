<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStcTemplatesTable extends Migration
{
    public function up()
    {
        Schema::create('stc_templates', function (Blueprint $table) {

		$table->bigIncrements('id')->unsigned();
		$table->string('name');
		$table->string('stc_name');
		$table->text('parameters');
        $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('stc_templates');
    }
}