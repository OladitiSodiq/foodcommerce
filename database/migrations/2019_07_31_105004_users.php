<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    if (!Schema::hasTable('users')) {
      Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('firstname')->nullable();
        $table->string('lastname')->nullable();
        $table->string('username')->nullable();
        $table->string('email')->nullable();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('provider');
        $table->string('prorovider_id');
        $table->string('password')->nullable();
        $table->string('street')->nullable();
        $table->string('zip')->nullable();
        $table->string('city')->nullable();
        $table->string('state')->nullable();
        $table->string('country')->nullable();
        $table->string('phone')->nullable();
        $table->string('fax')->nullable();
        $table->string('role')->nullable();
        $table->rememberToken();
        $table->timestamps();
      });
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  { }
}
