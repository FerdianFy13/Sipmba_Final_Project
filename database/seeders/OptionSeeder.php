<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Option::factory()->create([
            'option1' => 'Iya',
            // 'option2' => 'Iya',
            // 'option3' => 'Iya',
        ]);
        Option::factory()->create([
            'option1' => 'Tidak',
            // 'option2' => 'Tidak',
            // 'option3' => 'Tidak',
        ]);
    }
}
