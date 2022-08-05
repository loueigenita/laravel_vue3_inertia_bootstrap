<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pioneer;
class PioneerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pioneers = [
            [
            'type' => 'PIONEER DDJ-SB',
            'color' => 'BLACK',
            'channel' => '2 CHANNEL',
            'software' => 'SERATO | VIRTUAL DJ'
            ],
            [
            'type' => 'PIONEER DDJ-SB2',
            'color' => 'RED',
            'channel' => '4 CHANNEL',
            'software' => 'SERATO | VIRTUAL DJ'
            ],
            [
            'type' => 'PIONEER DDJ-SB3',
            'color' => 'BLACK',
            'channel' => '4 CHANNEL',
            'software' => 'SERATO | VIRTUAL DJ'
            ],
        ];
        foreach($pioneers as $pioneers){
            Pioneer::create($pioneers);
        }
    }
}
