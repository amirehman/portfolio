<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    $ptitle = $faker->sentence;
    return [
        'title' => $ptitle,
        'slug' => str_slug($ptitle),
        'detail' => $faker->text,
        'datee' => '1 Jan 2018'
    ];
});
