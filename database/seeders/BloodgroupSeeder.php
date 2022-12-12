<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BloodGroup::factory()->create([
            'group_name' => 'A+',
        ]);
        BloodGroup::factory()->create([
            'group_name' => 'A-',
        ]);
        BloodGroup::factory()->create([
            'group_name' => 'B+',
        ]);
        BloodGroup::factory()->create([
            'group_name' => 'B-',
        ]);
        BloodGroup::factory()->create([
            'group_name' => 'AB+',
        ]);
        BloodGroup::factory()->create([
            'group_name' => 'AB-',
        ]);
        BloodGroup::factory()->create([
            'group_name' => 'O+',
        ]);
        BloodGroup::factory()->create([
            'group_name' => 'O-',
        ]);
    }
}
