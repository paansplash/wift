<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('roles')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('statuses')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('subcategories', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('subcategories', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('statuses')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('inventories', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('wishlists', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('wishlist_items', function(Blueprint $table) {
			$table->foreign('wishlist_id')->references('id')->on('wishlists')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('wishlist_items', function(Blueprint $table) {
			$table->foreign('inventory_id')->references('id')->on('inventories')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('wishlist_items', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('statuses')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->foreign('wishlist_id')->references('id')->on('wishlists')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('statuses')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('order_items', function(Blueprint $table) {
			$table->foreign('order_id')->references('id')->on('orders')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('order_items', function(Blueprint $table) {
			$table->foreign('inventory_id')->references('id')->on('inventories')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('deliveries', function(Blueprint $table) {
			$table->foreign('order_id')->references('id')->on('orders')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('deliveries', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('statuses')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('deliveries', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('role_permissions', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('roles')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('role_permissions', function(Blueprint $table) {
			$table->foreign('permission_id')->references('id')->on('permissions')
						->onDelete('cascade')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_role_id_foreign');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_status_id_foreign');
		});
		Schema::table('subcategories', function(Blueprint $table) {
			$table->dropForeign('subcategories_category_id_foreign');
		});
		Schema::table('subcategories', function(Blueprint $table) {
			$table->dropForeign('subcategories_status_id_foreign');
		});
		Schema::table('inventories', function(Blueprint $table) {
			$table->dropForeign('inventories_user_id_foreign');
		});
		Schema::table('wishlists', function(Blueprint $table) {
			$table->dropForeign('wishlists_user_id_foreign');
		});
		Schema::table('wishlist_items', function(Blueprint $table) {
			$table->dropForeign('wishlist_items_wishlist_id_foreign');
		});
		Schema::table('wishlist_items', function(Blueprint $table) {
			$table->dropForeign('wishlist_items_inventory_id_foreign');
		});
		Schema::table('wishlist_items', function(Blueprint $table) {
			$table->dropForeign('wishlist_items_status_id_foreign');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->dropForeign('orders_wishlist_id_foreign');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->dropForeign('orders_status_id_foreign');
		});
		Schema::table('order_items', function(Blueprint $table) {
			$table->dropForeign('order_items_order_id_foreign');
		});
		Schema::table('order_items', function(Blueprint $table) {
			$table->dropForeign('order_items_inventory_id_foreign');
		});
		Schema::table('deliveries', function(Blueprint $table) {
			$table->dropForeign('deliveries_order_id_foreign');
		});
		Schema::table('deliveries', function(Blueprint $table) {
			$table->dropForeign('deliveries_status_id_foreign');
		});
		Schema::table('deliveries', function(Blueprint $table) {
			$table->dropForeign('deliveries_user_id_foreign');
		});
		Schema::table('role_permissions', function(Blueprint $table) {
			$table->dropForeign('role_permissions_role_id_foreign');
		});
		Schema::table('role_permissions', function(Blueprint $table) {
			$table->dropForeign('role_permissions_permission_id_foreign');
		});
	}
}