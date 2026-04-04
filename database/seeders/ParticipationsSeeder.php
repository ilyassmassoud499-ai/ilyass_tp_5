<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipationsSeeder extends Seeder
{
    public function run()
    {
        DB::table('participations')->insert([
            [
                'films_id' => 1,
                'acteur_id' => 1,
                'role' => 'Cobb',
                'typeRole' => 'principal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'films_id' => 2,
                'acteur_id' => 1,
                'role' => 'Jack',
                'typeRole' => 'principal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'films_id' => 2,
                'acteur_id' => 2,
                'role' => 'Rose',
                'typeRole' => 'principal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'films_id' => 3,
                'acteur_id' => 3,
                'role' => 'Maximus',
                'typeRole' => 'principal',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}