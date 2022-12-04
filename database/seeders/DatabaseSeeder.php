<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'nik' => '1234567812345678',
            'name' => 'Herlina Syafhita Maharani',
            'email' => 'herlina123@gmail.com',
            'password' => bcrypt('admin12345'),
            'role_id' => '1',
        ]);

        $this->call(CategorySeeder::class);
    }
}
