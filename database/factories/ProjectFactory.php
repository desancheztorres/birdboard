<?php

/** @var Factory $factory */

use App\{
    Project,
    User
};
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'owner_id' => function () {
            return factory(User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
    ];
});
