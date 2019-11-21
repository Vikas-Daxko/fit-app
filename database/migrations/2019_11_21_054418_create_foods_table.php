<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('meal_id')->nullable();
            $table->string('name');
            $table->string('image_url');
            $table->string('food_type')->comment('1 -> Veg., 2 -> Non. Veg.');
            $table->string('meal_type')->comment('1 -> BreakFast, 2 -> Lunch, 3 -> Dinner');
            $table->string('duration');
            $table->string('cals');
            $table->text('nutritional_info');
            $table->text('ingredients');
            $table->text('prepration');
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
        Schema::dropIfExists('foods');
    }
}
