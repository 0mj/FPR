<?php

use Faker\Generator as Faker;

$factory->define(App\League::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->state,
        'website' => $faker->unique()->domainName,
        'commisioner' => $faker->name,
        
    ];
});
