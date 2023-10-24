<?php

namespace Database\Seeders;

use App\Models\Inscriptioncours;
use Illuminate\Database\Seeder;

class ApprenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inscriptioncours::create([
            'nom' => 'DA',
            'prenom' => 'Ali',
            'email' => 'da@gmail.com',
            'role' => 'apprenant',
        ]);

    }
}
