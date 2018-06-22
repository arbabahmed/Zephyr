<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        'role_id'   =>  rand(1,2),
        'remember_token' => str_random(10),

    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text($maxNbChars = 150),
        'status' => 1
    ];
});

$factory->define(App\Ingredient::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'status' => 1
    ];
});

$factory->define(App\ManufacturingOrder::class, function ($faker) use ($factory) {

    $productIds = App\Product::all()->pluck('id')->toArray();

    $userIds = App\User::all()->pluck('id')->toArray();

    return [
        'product_id' 		=> $faker->randomElement($productIds),
        'batch_size' 		=> $faker->unique()->randomNumber($nbDigits = 4),
        'Unit'				=> 'KG',
        'batch_no'			=> $faker->unique()->randomNumber($nbDigits = 4),
        'author_id' 		=> $faker->randomElement($userIds),
        'qam_status' 		=> 1,
        'pm_status'			=> 1,
        'status'			=> 1,
    ];
});

$factory->define(App\PendingOrder::class, function ($faker) use ($factory) {

    $ingredientIds = App\Ingredient::all()->pluck('id')->toArray();

    $moIds = App\ManufacturingOrder::all()->pluck('id')->toArray();

    return [
        'code_no'                   => $faker->unique()->text($maxNbChars = 5),
        'quantity'                  => mt_rand() / mt_getrandmax(),
        'ingredient_id'             => $faker->randomElement($ingredientIds),
        'manufacture_order_id'      => $faker->randomElement($moIds),
        'assigned_quantity'         => mt_rand() / mt_getrandmax(),
        'issued_quantity'           => mt_rand() / mt_getrandmax(),
        'unit'                      => 'mg',
        'issued_by_warehouse'       => $faker->text($maxNbChars = 50),
        'verified_by_qa'            => 1,
        'verified_by_production'    => 1,
        'status'                    => 1,
    ];

});

$factory->define(App\Inventory::class, function ($faker) use ($factory) {

    $ingredientIds = App\Ingredient::all()->pluck('id')->toArray();

    $productIds = App\Product::all()->pluck('id')->toArray();

    return [
        'ingredient_id'                 => $faker->randomElement($ingredientIds),
        'product_id'                    => $faker->randomElement($productIds),
        'quantity'                      => 2.5,
        'unit'                          => 'KG',
        'status'                        => 1,
    ];

});