<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('SM_Notifications',function($table){
			$table->increments('id');
			$table->String('header');
			$table->String('message');
			$table->String('client_id');
			$table->integer('seen')->default(0);
			//$table->integer('sender_id')->references('id')->on('accounts');
			//$table->integer('receiver_id')->references('id')->on('accounts');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
