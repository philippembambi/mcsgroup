<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->id();
            $table->integer('is_admin')->default(0);
			$table->string('fullname');
			$table->string('phone_number', 15)->unique();
			$table->string('email')->unique()->nullable();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password')->unique();
/*
            $table->unsignedBigInteger('town_id');
            $table->foreign('town_id')
            ->references('id')
            ->on('towns')
            ->onDelete('restrict')
            ->onUpdate('restrict');
*/
			$table->rememberToken();

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}
