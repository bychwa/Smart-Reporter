<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration {

	public function up()
	{
		Schema::create('Notifications',function($table){
			$table->increments('id');
			$table->String('subject');
			$table->String('message');
			$table->String('geo_location');
			$table->String('client_id')->references('id')->on('users');
			$table->String('company_id')->references('id')->on('users');
			$table->integer('seen')->default(0);
			$table->timestamps();
		});
	}
	public function down()
	{
		Schema::drop('Notifications');
	}

}
