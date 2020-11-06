<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('covids', function (Blueprint $table) {
      $table->id();
      $table->date('date');
      $table->string('country');
      $table->integer('total_cases');
      $table->integer('new_cases');
      $table->integer('total_deaths');
      $table->integer('new_deaths');
      $table->integer('total_recovered');
      $table->integer('active_cases');
      $table->integer('critical');
      $table->integer('total_in_1M');
      $table->integer('deaths_in_1M');
      $table->integer('population');
      $table->integer('case_in_x_ppl');
      $table->integer('death_in_x_ppl');
      $table->integer('test_in_x_ppl');
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
    Schema::dropIfExists('covids');
  }
}
