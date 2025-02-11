<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration {

	public function up()
	{
		Schema::create('deliveries', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('order_id')->unsigned();
			$table->bigInteger('status_id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('deliveries');
	}
}