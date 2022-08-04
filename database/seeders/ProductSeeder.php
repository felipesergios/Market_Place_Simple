<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name'=>'Oleo de peroba',
            'product_price'=>'50.5',
            'product_campaing'=>'1']);
    }
}
