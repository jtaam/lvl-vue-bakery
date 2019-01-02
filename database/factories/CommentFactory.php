<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Comment::class, function (Faker $faker) {
    return [
        //
        'post_id'=>rand(100,150),
        'author_id'=>rand(1,10),
        'comment'=>$faker->paragraph,
    ];
});
