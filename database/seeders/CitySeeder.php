<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'city_name'=>'Natal',
            'city_simbol'=>'NAT',
            'city_state'=>'RN',
            'city_group_id'=>'1',
        ]);
    }
}
