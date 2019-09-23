<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('food', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title')->nullable();
      $table->string('full_price')->nullable();
      $table->string('discounted_price')->nullable();
      $table->string('quantity')->nullable();
      $table->string('short_desc')->nullable();
      $table->string('full_desc')->nullable();
      $table->string('category')->nullable();
      $table->string('views')->nullable();
      $table->string('image')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('food');
  }
}
