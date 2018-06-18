<?php

use Faker\Generator as Faker;

$factory->define(App\Element::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'link' => 'http://google.com'
    ];
});
