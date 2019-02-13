<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('status');
            $table->tinyInteger('order');

            $table->timestamps();
        });

        $faker = Faker\Factory::create();

        $limit = 4;

        for ($i = 0; $i < $limit; $i++) {
            \DB::table('categories')->insert([ //,
                'name'      => $faker->word,
                'status'    => $faker->numberBetween(0,1),
                'order'     => $faker->numberBetween(0,5),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
