<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('address',255);
            $table->string('phone',10);
            $table->string('menu_options',1000)->nullable();
            $table->string('email',100)->nullable();
            $table->string('website',255)->nullable();
            $table->string('comments',1000)->nullable();
            $table->tinyInteger('rating')->unsigned()->default(0);
            $table->foreignIdFor(\App\Models\Country::class);
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
        Schema::dropIfExists('restaurants');
    }
}
