<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UsersInformation;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(UsersInformation::class, function (Faker $faker) {
    static $userId = 1;

    return [
        'user_id' => $userId++,
        'first_name' => $faker->firstName,
        'hobbies' => $faker->sentences(1, true),
        'age' => $faker->numberBetween(18, 54),
        'avatar_src' => null
    ];
});
