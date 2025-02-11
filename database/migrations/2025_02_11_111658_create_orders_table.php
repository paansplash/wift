<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('wishlist_id')->unsigned();
			$table->decimal('amount');
			$table->bigInteger('status_id')->unsigned()->nullable();
			$table->string('name');
			$table->softDeletes();
			$table->timestamps();
			$table->text('note')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}