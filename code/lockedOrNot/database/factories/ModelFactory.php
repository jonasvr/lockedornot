<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Illuminate\Support\Facades\Hash;

$factory->define(App\User::class, function (Faker\Generator $faker) {

    $full_name = $faker->firstName.' '.$faker->lastName;
    $name = explode(' ', $full_name);

    $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', '2015-'.rand(1, 12).'-'.rand(1, 30).' '.rand(0, 12).':00:00');

    $cities = ['Antwerp', 'Gent', 'Brussels', 'Paris', 'London'];
    $cars   = ['Volvo', 'Audi', 'Mercedes', 'Toyota', 'Jaguar'];
    $colours = ['red', 'blue', 'white', 'black', 'grey'];
    $digits = 5;

    return [
//        'username'      => $full_name,
        'first_name'    => $name[0],
        'last_name'     => $name[1],
        'email'         => $faker->email,
        'password'      => Hash::make('testing'),
//        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'device_nr'     => 'LRN'.rand(pow(10, $digits-1), pow(10, $digits)-1),
        'city'          => $cities[rand(0, 4)],
        'car_brand'     => $cars[rand(0, 4)],
        'car_color'     => $colours[rand(0,4)],
        'created_at'    =>  $date,
        'updated_at'    =>  $date
    ];
});
