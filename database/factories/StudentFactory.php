<?php

use Faker\Generator as Faker;


$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'user_name' => $faker->userName,
        'nid' => $faker->unique()->randomNumber($nbDigits = 8),
        'gender' => 'Male',
        'dob' => '09/08/1988',
        'phone' => '+88019'.$faker->unique()->randomNumber($nbDigits = 8),
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'religion' => 'ISLAM',
        'avator' => 'scource/image/avator/student__1538916622_0117-GL-LIFE01-02.jpg',
        'registration' => $faker->unique()->randomNumber($nbDigits = 6),
        'label_id' => '1',
        'section_id' => '10',
        'roll' => $faker->numberBetween($min = 1, $max = 60),
        'group' => 'GENERAL',
        'last_school' => 'VIDDYA NIKETON',
        'Last_standerd' => '5 STD',
        'last_marks' => '78',
        'sports' => 'Cricket',
        'status' => '1',
    ];
});

$factory->define(App\StudentContact::class, function (Faker $faker) {
    return [
        //'student_id' => $faker->randomElement(App\Student::pluck('id', 'id')->toArray()),
        'phone' => '+88019'.$faker->unique()->randomNumber($nbDigits = 8),//+88019 53748835
        'email' => $faker->unique()->safeEmail,
        'country' => 'Bangladesh',
        'division_id' => '4',
        'districts_id' => '58',
        'upzilla_id' => '296',
        'zip' => '53245',
        'address_1' => $faker->buildingNumber.', '.$faker->streetName,
        'address_2' => $faker->city,
    ];
});

$factory->define(App\StudentGuardian::class, function (Faker $faker) {
    return [
    	//'student_id' => $faker->randomElement(App\Student::pluck('id', 'id')->toArray()),
        'father_name' => $faker->firstNameMale.' '.$faker->lastName,
        'mother_name' => $faker->firstNameFemale.' '.$faker->lastName,
        'occupation' => $faker->jobTitle,
        'guardians_nid' => $faker->unique()->randomNumber($nbDigits = 8),
        'gurdians_phone' => '+88019'.$faker->unique()->randomNumber($nbDigits = 8),
        'gurdians_phone_alt' => '+88019'.$faker->unique()->randomNumber($nbDigits = 8),
        'gurdians_email' => $faker->unique()->safeEmail,
        'father_photo' => 'scource/image/avator/guardian__1538916623_man-in-suit2.jpg',
        'mother_photo' => 'scource/image/avator/guardian__1538922821_k.PNG',
        'gurdians_religion' => 'ISLAM',
        'nationality' => 'BANGLADESHI',
    ];
});
