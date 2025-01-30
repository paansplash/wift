<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistItemsTable extends Migration {

	public function up()
	{
		Schema::create('wishlist_items', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('wishlist_id')->unsigned();
			$table->bigInteger('inventory_id')->unsigned();
			$table->bigInteger('status_id')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('wishlist_items');
	}
}