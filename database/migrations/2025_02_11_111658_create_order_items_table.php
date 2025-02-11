<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration {

	public function up()
	{
		Schema::create('order_items', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('order_id')->unsigned();
			$table->bigInteger('inventory_id')->unsigned();
			$table->decimal('price');
			$table->integer('quantity')->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('order_items');
	}
}