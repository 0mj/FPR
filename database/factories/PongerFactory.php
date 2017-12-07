<?php

use Faker\Generator as Faker;

$factory->define(App\Ponger::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameFemale,
        'last_name' => $faker->lastName,
        'city' => $faker->city,
        'state' => $faker->state,
        'age' => $faker->numberBetween(10,65),
        'swing_hand' => 'right',
        'lifetime_win' => 0,
        'lifetime_loss' => 0,
        
    ];
});
