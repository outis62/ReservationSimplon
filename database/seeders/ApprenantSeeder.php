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
            'nom' => 'ZABRE',
            'prenom' => 'Boureima',
            'email' => 'zabre@gmail.com',
            'password' => bcrypt('zabrepass'),
        ]);

    }
}
