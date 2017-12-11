<?php

use Faker\Generator as Faker;

$factory->define(App\Ponger::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'city' => $faker->city,
        'state' => $faker->state,
        'age' => $faker->numberBetween(10,65),
        'swing_hand' => 'left',
        'lifetime_win' => 0,
        'lifetime_loss' => 0,
        
    ];
});
