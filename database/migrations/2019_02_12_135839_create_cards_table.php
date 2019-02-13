<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->datetime('date')->nullable();
            $table->boolean('status');
            $table->tinyInteger('order')->default(0);
            $table->string('slug')->nullable();
            $table->string('media')->nullable();
            $table->string('title');
            $table->text('body');
            
            $table->softDeletes();
            $table->timestamps();
            
        });

        $faker = Faker\Factory::create();

        $limit = 17;

        for ($i = 0; $i < $limit; $i++) {
            \DB::table('cards')->insert([ //,
                'category_id'   => $faker->numberBetween(1,4),
                'date'          => $faker->dateTime('now', 'Europe/Madrid'),
                'status'        => $faker->numberBetween(0,1),
                'order'         => $faker->randomDigitNotNull,
                'slug'          => $faker->url,
                'media'         => $faker->realText(200),
                'title'         => $faker->realText(150),
                'body'     => $faker->realText(15500),
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
        Schema::dropIfExists('cards');
    }
}
