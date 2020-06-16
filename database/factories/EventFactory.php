<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'name_event' => $faker->catchPhrase,
        'date_event' => $faker->dateTime,
    ];
});
