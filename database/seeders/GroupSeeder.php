<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;
class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'group_name'=>'Janeiro Fest',
            'group_campaing'=>'1'
        ]);
    }
}
