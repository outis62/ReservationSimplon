<?php

namespace Database\Seeders;

use App\Models\Inscriptioncours;
use Illuminate\Database\Seeder;

class InscriptioncoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inscriptioncours::create([
            'nom' => 'ZONGO',
            'prenom' => 'Aline',
            'email' => 'zongo@gmail.com',
            'password' => 'zongopass',
            'role' => ('apprenant'),
        ]);
        Inscriptioncours::create([
            'nom' => 'KABRE',
            'prenom' => 'Juck',
            'email' => 'kabre@gmail.com',
            'password' => 'kabrepass',
            'role' => ('apprenant'),
        ]);
    }
}
