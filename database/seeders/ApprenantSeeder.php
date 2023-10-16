<?php

namespace Database\Seeders;

use App\Models\Apprenant;
use Illuminate\Database\Seeder;

class ApprenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apprenant::create([
            'nom' => 'DAO',
            'prenom' => 'Aline',
            'email' => 'dao@gmail.com',
            'role' => 'apprenant',
        ]);
        Apprenant::create([
            'nom' => 'DAFFY',
            'prenom' => 'Duck',
            'email' => 'daffy@gmail.com',
            'role' => 'apprenant',
        ]);
    }
}
