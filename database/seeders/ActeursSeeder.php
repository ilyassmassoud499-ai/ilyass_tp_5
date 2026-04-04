<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeursSeeder extends Seeder
{
    public function run()
    {
        DB::table('acteurs')->insert([
            [
                'nom' => 'DiCaprio',
                'prenom' => 'Leonardo',
                'pays' => 'USA',
                'date_naissance' => '1974-11-11',
                'tel' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Winslet',
                'prenom' => 'Kate',
                'pays' => 'UK',
                'date_naissance' => '1975-10-05',
                'tel' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Crowe',
                'prenom' => 'Russell',
                'pays' => 'NZ',
                'date_naissance' => '1964-04-07',
                'tel' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}