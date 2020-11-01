<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookable;
use Faker\Generator as Faker;

$suffix = [
    'Cottage',
    'House',
    'Home',
    'Manson',
    'Villa',
    'Luxary Villa',
    'Fancy Home',
    'Rooms',
    'Cheap Rooms',
    'Fancy Rooms'
];

$factory->define(Bookable::class, function (Faker $faker) use($suffix) {
    return [
        'title' => $faker->city . '  '. Arr::random($suffix),
        'description'=>$faker->text()
    ];
});
