<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BloodRequest;
use App\Models\BloodStok;
use App\Models\Event;
use App\Models\Feedback;
use App\Models\News;
use App\Models\OfficerData;
use App\Models\QuestionOne;
use App\Models\User;
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
            'name' => 'Administrator',
            'email' => 'pmiadminbantul56@gmail.com',
            'password' => bcrypt('bantuladminpmi56'),
            'role_id' => '1',
        ]);

        \App\Models\User::factory()->create([
            'nik' => '3525016501830008',
            'name' => 'Ryansyah Abraham',
            'email' => 'ryansyahabraham@gmail.com',
            'password' => bcrypt('123459876'),
            'role_id' => '2',
        ]);

        $this->call(CategorySeeder::class);
        $this->call(KuizionerSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(BloodgroupSeeder::class);
        $this->call(BloodcomponentSeeder::class);

        QuestionOne::factory(5)->create();
        Feedback::factory(15)->create();
        News::factory(15)->create();
        User::factory(15)->create();
        Event::factory(15)->create();
        BloodRequest::factory(15)->create();
        BloodStok::factory(15)->create();
        OfficerData::factory(15)->create();
    }
}
