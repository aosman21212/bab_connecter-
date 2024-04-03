<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStcUsersTable extends Migration
{
    public function up()
    {
        Schema::create('stc_users', function (Blueprint $table) {

		$table->bigIncrements('id')->unsigned();
		$table->integer('conversation_id',)->unsigned();
		$table->string('wfms_task_num');
		$table->string('crm_order_num');
		$table->string('wfms_order_num');
		$table->tinyInteger('can_send_location')->default('0');
		$table->integer('can_select_time')->default('1');
		$table->integer('can_cancel_order')->default('1');
		$table->tinyInteger('can_confirm_order')->default('1');
		$table->string('survey_id')->nullable()->default('NULL');
        $table->timestamps();

		$table->foreign('conversation_id')->references('id')->on('conversations');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stc_users');
    }
};