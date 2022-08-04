<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Discount;
class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discount::create([
            'discount_size'=>'20%',
            'discount_campaing'=>'1',
        ]);
    }
}
