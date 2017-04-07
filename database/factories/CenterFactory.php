<?php
$factory->define(App\center::class, function (Faker\Generator $faker) {


    return [
//        ' user_id' => 1,
        'Name' => $faker->name ,
        'District'=>$faker->name,
        'Thana'=>$faker->name,
        'user_password' => $faker->password,
    ];
});
