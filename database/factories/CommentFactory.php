<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
       	'body' => $faker->text(),
       	'post_id' => $faker->numberBetween(1,10),
       	'user_id' => $faker->numberBetween(1,10)
    ];
});
