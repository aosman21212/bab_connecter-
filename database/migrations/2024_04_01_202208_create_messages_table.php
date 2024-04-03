<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {

            $table->increments('id')->unsigned();
            $table->integer('conversation_id')->unsigned();
            $table->integer('send_by_id');
            $table->string('send_by_type');
            $table->string('type');
            $table->string('message_id');
            $table->string('tracking_info')->nullable()->default(null); // Changed default to null
            $table->text('message');
            $table->string('title')->nullable()->default(null); // Changed default to null
            $table->integer('media_id')->unsigned()->nullable()->default(null); // Changed default to null
            $table->string('media_type')->nullable()->default(null); // Changed default to null
            $table->string('error_code')->nullable()->default(null); // Changed default to null
            $table->string('error_message')->nullable()->default(null); // Changed default to null
            $table->tinyInteger('send_to_3rd')->nullable()->default(null); // Changed default to null and removed length argument
            $table->text('send_to_3rd_code');
            $table->string('send_at')->nullable()->default(null); // Changed default to null
            $table->string('delivered_at')->nullable()->default(null); // Changed default to null
            $table->string('read_at')->nullable()->default(null); // Changed default to null
            $table->timestamps();

            $table->foreign('conversation_id')->references('id')->on('conversations');
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
