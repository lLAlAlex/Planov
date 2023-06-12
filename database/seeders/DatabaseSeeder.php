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
        $this->call(UserSeeder::class);
        $this->call(DeadlineSeeder::class);
        $this->call(NoteSeeder::class);
        $this->call(ListSeeder::class);
        $this->call(VideoSeeder::class);
    }
}
