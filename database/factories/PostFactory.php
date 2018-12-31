<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        //
        'author_id'=>$faker->rand(1,10),
        'category_id'=>$faker->rand(1,10),
        'title'=>$faker->sentence(5),
        'slug'=>$faker->slug(5),
        'top_image'=>$faker->imageUrl(555,280),
        'top_description'=>$faker->paragraph(3,true),
        'post_promo'=>$faker->paragraph(1),
        'left_image'=>$faker->imageUrl(360,350),
        'right_image'=>$faker->imageUrl(360,350),
        'bottom_description'=>$faker->paragraphs(2,true),
        'view_count'=>$faker->rand(0,15),
        'status'=>$faker->rand(0,1),
        'is_approved'=>$faker->rand(0,1),
    ];
});
