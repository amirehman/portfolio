<?php

use Faker\Generator as Faker;

$factory->define(App\ProjectPage::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'detail' => $faker->paragraph,
        'image' => 'https://picsum.photos/200/300/?random',
        'project_id' => function () {
            return App\Project::all()->random();
        }
    ];
});
