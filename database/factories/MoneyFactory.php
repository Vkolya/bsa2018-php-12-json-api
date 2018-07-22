<?php

use Faker\Generator as Faker;
use App\Entity\Money;
use App\Entity\Wallet;
use App\Entity\Currency;

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

$factory->define(Money::class, function (Faker $faker) {
    return [
        'currency_id' => function () {
            return factory(Currency::class)->create()->id;
        },
        'amount' => $faker->randomFloat(2,1,10000),
        'wallet_id' => function () {
            return factory(Wallet::class)->create()->id;
        },
    ];
});
