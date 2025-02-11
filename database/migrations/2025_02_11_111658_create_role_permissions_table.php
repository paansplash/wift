<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePermissionsTable extends Migration {

	public function up()
	{
		Schema::create('role_permissions', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('role_id')->unsigned();
			$table->bigInteger('permission_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('role_permissions');
	}
}