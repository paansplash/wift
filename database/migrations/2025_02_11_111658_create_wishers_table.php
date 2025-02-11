<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishersTable extends Migration {

	public function up()
	{
		Schema::create('wishers', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('user_id')->unsigned();
			$table->string('name');
			$table->string('phone_no');
			$table->string('addr1');
			$table->string('addr2')->nullable();
			$table->string('addr3')->nullable();
			$table->string('postcode');
			$table->string('city');
			$table->string('state');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('wishers');
	}
}