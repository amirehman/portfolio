<?php

use Faker\Generator as Faker;

$factory->define(App\ExperienceList::class, function (Faker $faker) {
    return [
        'item' => $faker->text,
        'experience_id' => function () {
            return App\Experience::all()->random();
        }
    ];
});
