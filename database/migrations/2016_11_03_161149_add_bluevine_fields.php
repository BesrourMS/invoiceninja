<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBlueVineFields extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table( 'accounts', function ( $table ) {
			$table->enum( 'bluevine_status', array( 'ignored', 'signed_up' ) )->nullable();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table( 'accounts', function ( $table ) {
			$table->dropColumn( 'bluevine_status' );
		} );
	}
}