<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Channel;
use App\User;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Channel::class, function (Faker $faker) {
    $userId = User::all()->pluck('id')->random();
    $categoryId = Category::all()->pluck('id')->random();
    return [
        'user_id' => $userId,
        'category_id' => $categoryId,
        'title' => $faker->sentence,
    ];
});
