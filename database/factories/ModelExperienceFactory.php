<?php

use Faker\Generator as Faker;


$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'company' => $faker->company,
        'company_link' => 'http://amirrehman.com',
        'detail' => $faker->paragraph,
        'start_date' => 'MARCH 2013',
        'end_date' => '2014'
         
    ];
});
