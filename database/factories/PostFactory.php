<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(3),
        'lead'=> $faker->paragraphs(10,true),
        'content'=> $faker->text(200) , 
        'author_id'=>random_int(1,20),
        'topic_id'=> random_int(1,3)
    
    ];
});
