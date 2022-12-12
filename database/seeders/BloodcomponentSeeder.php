<?php

namespace Database\Seeders;

use App\Models\BloodComponent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodcomponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BloodComponent::factory()->create([
            'component_name' => 'AHF',
        ]);
        BloodComponent::factory()->create([
            'component_name' => 'Plasma Konvalesen',
        ]);
        BloodComponent::factory()->create([
            'component_name' => 'FFP',
        ]);
        BloodComponent::factory()->create([
            'component_name' => 'PCR',
        ]);
        BloodComponent::factory()->create([
            'component_name' => 'PRC',
        ]);
        BloodComponent::factory()->create([
            'component_name' => 'TC',
        ]);
        BloodComponent::factory()->create([
            'component_name' => 'WB',
        ]);
    }
}
