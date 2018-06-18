<?php

use Faker\Generator as Faker;

$factory->define(App\ProjectElement::class, function (Faker $faker) {
    return [
        'element_id' => function () {
            return App\Project::all()->random();
        },
        'project_id' => function () {
            return App\Project::all()->random();
        }
    ];
});
