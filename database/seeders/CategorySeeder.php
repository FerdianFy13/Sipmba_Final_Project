<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::factory()->create([
            'name' => 'Kuisioner 1',
            // 'name' => 'Kuisioner 2',
        ]);
        Category::factory()->create([
            // 'name' => 'Kuisioner 1',
            'name' => 'Kuisioner 2',
        ]);
    }
}
