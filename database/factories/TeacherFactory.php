<?php

use Faker\Generator as Faker;
 //$teachers = App\Teacher::all();

$factory->define(App\Teacher::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'user_name' => $faker->userName,
        'nid' => $faker->unique()->randomNumber($nbDigits = 8),
        'gender' => 'Male',
        'dob' => '09/08/1988',
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'religion' => 'ISLAM',
        'avator' => 'scource/image/avator/teacher__1538568617_parent2.jpg',
        'status' => '1',
    ];
});

/*$factory->define(App\TeacherAcademic::class, function (Faker $faker) {
    return [
        'teacher_id' => $faker->randomElement(App\Teacher::pluck('id', 'id')->toArray()),
        'highest_degree' => '1',
        'degree' => 'PHD',
        'university' => 'DU',
        'passing_year' => '2017',
        'cgpa' => '3.45',
    ];
});*/

/*$factory->define(App\TeacherAcademic::class, function (Faker $faker) {
    return [
        'teacher_id' => $faker->randomElement(App\Teacher::pluck('id', 'id')->toArray()),
        'highest_degree' => '0',
        'degree' => 'MA',
        'university' => 'DU',
        'passing_year' => '2015',
        'cgpa' => '3.45',
    ];
});*/


$factory->define(App\TeacherAcademic::class, function (Faker $faker) {
    return [
        'teacher_id' => $faker->randomElement(App\Teacher::pluck('id', 'id')->toArray()),
        'highest_degree' => '0',
        'degree' => 'HONARS',
        'university' => 'DU',
        'passing_year' => '2013',
        'cgpa' => '3.45',
    ];
});



$factory->define(App\TeacherContact::class, function (Faker $faker) {
    return [
        //'teacher_id' => $faker->randomElement(App\Teacher::pluck('id', 'id')->toArray()),
       // 'teacher_id' => $faker->numberBetween($min = 3, $max = 253),
        'p_country' => 'Bangladesh',
        'p_division_id' => '4',
        'p_districts_id' => '58',
        'p_upzilla_id' => '296',
        'p_zip' => '53245',
        'p_address_1' => $faker->buildingNumber.', '.$faker->streetName,
        'p_address_2' => $faker->city,

        'country' => 'Bangladesh',
        'division_id' => '4',
        'districts_id' => '58',
        'upzilla_id' => '296',
        'zip' => '53245',
        'address_1' => $faker->buildingNumber.', '.$faker->streetName,
        'address_2' => $faker->city,

        'phone' => '+88019'.$faker->unique()->randomNumber($nbDigits = 8),//+88019 53748835
        'alt_phone' => '+88019'.$faker->unique()->randomNumber($nbDigits = 8),
        'email' => $faker->unique()->safeEmail,
    ];
});
