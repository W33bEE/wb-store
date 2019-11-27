<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(App\Product::class,function (Faker $faker) {
    $users = User::pluck('id')->toArray();
    return [
        //
        'user_id'=>$faker->randomElement($users),
        'category_id'=>$faker->numberBetween($min = 1,$max = 5),
        'photo_id'=>$faker->numberBetween($min = 1,$max = 5),
        'photo_id'=>$faker->numberBetween($min = 1,$max = 5),
        'brand_id'=>$faker->numberBetween($min = 1,$max = 5),
        'size_id'=>$faker->numberBetween($min = 1,$max = 5),
        'stock_id'=>$faker->numberBetween($min = 1,$max = 5),
        'price'=>$faker->numberBetween($min = 10,$max = 90),
        'title'=>$faker->sentence($nbWords = 6,$variableNbWords = true),
        'body'=>$faker->paragraph

    ];
});
