<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{

	public function up()
	{
		Schema::create('roles', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title', 100);
			$table->string('description', 255)->nullable();
			$table->smallInteger('status')->default('1');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('roles');
	}
}
