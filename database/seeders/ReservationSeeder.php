<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'heure_reservation' => '18H',
            'jour_reservation' => 'Mardi',
            'id_apprenant' => '1',
        ]);
        Reservation::create([
            'heure_reservation' => '17H',
            'jour_reservation' => 'Vendredi',
            'id_apprenant' => '2',
        ]);
    }
}
