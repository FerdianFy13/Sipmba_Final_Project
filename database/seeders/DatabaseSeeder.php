<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\QuestionOne;
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
            'nik' => '3525015201880002',
            'name' => 'Herlina Syafhita Maharani',
            'email' => 'herlina123@gmail.com',
            'password' => bcrypt('admin12345'),
            'role_id' => '1',
        ]);

        \App\Models\User::factory()->create([
            'nik' => '3525016501830002',
            'name' => 'Ferdian Firmansyah',
            'email' => 'ferdianfy13@gmail.com',
            'password' => bcrypt('123459876'),
            'role_id' => '2',
        ]);

        $this->call(CategorySeeder::class);
        $this->call(KuizionerSeeder::class);
        $this->call(OptionSeeder::class);

        QuestionOne::factory(5)->create([]);
        // Event::factory(5)->create();
    }
}
