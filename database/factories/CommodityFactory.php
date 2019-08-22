<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Commodity;
use Faker\Generator as Faker;

$factory->define(Commodity::class, function (Faker $faker) {

    return [
        'number_invoice' => $faker->word,
        'date_invoice' => $faker->word,
        'code_product' => $faker->word,
        'description_product' => $faker->word,
        'qty' => $faker->randomDigitNotNull,
        'unit' => $faker->randomElement(['PCS', 'SETS', 'CARDS', 'BAGS', 'PAIRS']),
        'unit_price_usd' => $faker->word,
        'ctns' => $faker->randomDigitNotNull,
        'pcs_per_package' => $faker->randomDigitNotNull,
        'exchange_rate' => $faker->word,
        'base_fob_without_lien' => $faker->word,
        'lien' => $faker->word,
        'selective' => $faker->word,
        'safe_and_trasport' => $faker->word,
        'customs_fees' => $faker->word,
        'provider_expenses' => $faker->word,
        'impairment_loss' => $faker->word,
        'unique_cost' => $faker->word,
        'wholesale' => $faker->word,
        'retail_store' => $faker->word,
        'wholesale_store' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
