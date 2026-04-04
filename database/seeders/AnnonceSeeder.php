<?php

namespace Database\Seeders;

use App\Models\Annonce;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Annonce::create([
        'titre' => 'Appartement luxe',
        'description' => 'Très beau appartement',
        'type' => 'Appartement',
        'ville' => 'Casablanca',
        'superficie' => 120,
        'neuf' => true,
        'prix' => 1200000
    ]);
        //
    }
}
