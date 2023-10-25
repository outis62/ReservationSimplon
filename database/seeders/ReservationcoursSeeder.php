<?php

namespace Database\Seeders;

use App\Models\Reservationcours;
use Illuminate\Database\Seeder;

class ReservationcoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservationcours::create([
            'heure_reservation' => '18H',
            'jour_reservation' => 'Mardi',
            'id_apprenant' => '2',
        ]);
        Reservationcours::create([
            'heure_reservation' => '17H',
            'jour_reservation' => 'Vendredi',
            'id_apprenant' => '3',
        ]);
    }
}
