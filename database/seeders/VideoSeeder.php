<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = [
            [
                'title' => 'ASP.NET Core Crash Course - C# App in One Hour',
                'link' => 'https://www.youtube.com/embed/BfEjDD8mWYg'
            ],
            [
                'title' => 'Python for Beginners - Learn Python in 1 Hour',
                'content' => 'https://www.youtube.com/embed/kqtD5dpn9C8'
            ],
            [
                'title' => 'What is Python? Why Python is So Popular?',
                'content' => 'https://www.youtube.com/embed/Y8Tko2YC5hA'
            ],
            [
                'title' => 'Python in 100 Seconds',
                'content' => 'https://www.youtube.com/embed/x7X9w_GIm1s'
            ]
        ];
        DB::table('videos')->insert($videos);
    }
}
