<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Note;
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

        User::factory(1)->create([
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('pass123.')
        ]);

        User::factory(1)->create([
            'id' => 2,
            'name' => 'Test User2',
            'email' => 'test2@example.com',
            'password' => bcrypt('pass123.')
        ]);

        Note::factory(100)->create();
    }
}
