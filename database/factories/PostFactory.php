<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'body' => '<p>'.$faker->text().'</p>'.'<p>'.$faker->text().'</p>'.'<p>'.$faker->text().'</p>'
    ];
});
