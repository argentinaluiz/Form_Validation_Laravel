<?php

use Faker\Generator as Faker;
require_once __DIR__ . '/../faker_data/document_number.php';

$factory->define(App\Client::class, function (Faker $faker) {
	$cpfs = cpfs();
    return [
        'name' => $faker->name,
        'document_number' => $cpfs[array_rand($cpfs, 1)],
        'email' => $faker->email,
        'fone' => $faker->phoneNumber,
        'defaulter' => rand(0,1),
        'date_birth' => $faker->date(),
        'sex' => rand(1,10)%2==0?'m' : 'f',
        'marital_status' => rand(1,3),
        'physical_desability' => rand(1,10)%2==0? $faker->word : null
    ];
});

