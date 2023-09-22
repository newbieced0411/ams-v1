<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('department_id')->unsigned()->nullable();
			$table->bigInteger('role_id')->unsigned()->nullable();
			$table->string('firstName', 100);
			$table->string('middleName', 100)->nullable();
			$table->string('lastName', 100);
			$table->string('email', 255);
			$table->string('password', 255);
			$table->string('phoneNumber', 100);
			$table->string('lastLogin', 255)->nullable();
			$table->smallInteger('status')->default('1');
			$table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
