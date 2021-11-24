<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('description',255);
            $table->string('ingredients',1000);
            $table->string('steps',5000);
            $table->string('website',500)->nullable();
            $table->string('comments',1000)->nullable();
            $table->smallInteger('calories')->nullable()->unsigned();
            $table->tinyInteger('servings')->nullable()->unsigned();
            $table->tinyInteger('rating')->unsigned()->default(0);
            $table->foreignIdFor(\App\Models\Country::class)->nullable();;
            $table->foreignIdFor(\App\Models\User::class)->nullable();;
            $table->foreignIdFor(\App\Models\Restaurant::class)->nullable();;
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
        Schema::dropIfExists('recipes');
    }
}
