<?php

use Faker\Generator as Faker;

$factory->define(App\Topic::class, function (Faker $faker) {
    return [
        //
        'contributor' => '匿名ユーザー1',
        'content' => 'Testの書き込み！',
        'like_count' => 1,
    ];
});
