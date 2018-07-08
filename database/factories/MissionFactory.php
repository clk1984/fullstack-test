<?php

use Faker\Generator as Faker;


$factory->define(App\Mission::class, function (Faker $faker) {

  return [
    'title' => $faker->sentence(6, true),
    'description' => $faker->text(200),
    'created_at' => $faker->dateTime(),
    'updated_at' => $faker->dateTime(),
    'deleted_at' => $faker->optional($weight = 0.4)->dateTime(),
    'user_id' => factory(App\User::class)->create()->id,
    //QUESTION: deleted will have 40% probability to be filled with a datetime and 60% chances to be filled with null
  ];
});
