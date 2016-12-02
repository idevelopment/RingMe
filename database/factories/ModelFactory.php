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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'fname'          => $faker->firstName,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'avatar'         => 'test image path',
        'remember_token' => str_random(10),
        'biography'      => $faker->text(150)
    ];
});

$factory->define(App\Countries::class, function(Faker\Generator $faker) {
    return ['country' => $faker->country];
});

$factory->define(App\Departments::class, function (Faker\Generator $faker) {
    return [
        'name'    => $faker->name,
        'manager' => $faker->numberBetween(0, 120)
    ];
});

$factory->define(App\Callback::class, function (Faker\Generator $faker) {
    return [
        'department'  => '1',
        'agent_id'    => '1',
        'customer'    => '1',
        'description' => $faker->text(150),
        'status'      => 'open'
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'name'    => $faker->firstName.$faker->lname,
        'fname'   => $faker->firstName,
        'lname'   => $faker->lname,
        'address' => $faker->address,
        'zipcode' => $faker->citySuffix,
        'city'    => $faker->city,
        'country' => $faker->country,
        'phone'   => $faker->phoneNumber,
        'mobile'  => $faker->phoneNumber,
        'email'   => $faker->email,
        'vat'     => $faker->creditCardNumber,
        'status'  => 'validated'
    ];
});

$factory->define(App\Roles::class, function(Faker\Generator $faker) {
    return ['name' => 'Administrator'];
});
