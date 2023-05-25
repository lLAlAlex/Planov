<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deadlines = [
            [
                'userID' => 1,
                'title' => 'English',
                'deadlinedate' => Carbon::create('2023', '02', '03'),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
            [
                'userID' => 1,
                'title' => 'Calculus',
                'deadlinedate' => Carbon::create('2023', '04', '11'),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
            [
                'userID' => 1,
                'title' => 'Biology',
                'deadlinedate' => Carbon::create('2023', '02', '20'),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
            [
                'userID' => 1,
                'title' => 'Agile',
                'deadlinedate' => Carbon::create('2023', '02', '20'),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.'
            ],
        ];
        DB::table('deadlines')->insert($deadlines);
    }
}
