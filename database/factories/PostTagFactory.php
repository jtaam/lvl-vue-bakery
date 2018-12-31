<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
});

DB::table('post_tag')->insert(
    [
        'post_id' => \App\Models\Post::select('id')->orderByRaw("RAND()")->first()->id,
        'tag_id' => \App\Models\Tag::select('id')->orderByRaw("RAND()")->first()->id,
    ]
);
