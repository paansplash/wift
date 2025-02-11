<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration {

	public function up()
	{
		Schema::create('inventories', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->bigInteger('subcategory_id')->unsigned();
			$table->decimal('price');
			$table->integer('quantity')->nullable();
			$table->string('attachment')->nullable();
			$table->bigInteger('user_id')->unsigned()->nullable();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('inventories');
	}
}