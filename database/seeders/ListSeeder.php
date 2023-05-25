<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todolists = [
            [
                'userID' => 1,
                'dolist' => 'Send report',
                'status' => 'finished'
            ],
            [
                'userID' => 1,
                'dolist' => 'Homework',
                'status' => 'unfinished'
            ],
            [
                'userID' => 1,
                'dolist' => 'Play',
                'status' => 'unfinished'
            ]
        ];
        DB::table('todolists')->insert($todolists);
    }
}
