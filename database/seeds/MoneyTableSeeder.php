<?php

use Illuminate\Database\Seeder;
use App\Entity\Money;

class MoneyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Money::class,10)->create();
    }
}
