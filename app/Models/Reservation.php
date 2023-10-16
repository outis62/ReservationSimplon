<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'heure_reservation',
        'jour_reservation',
        'id_apprenant',
    ];
    public function updateStatus($status)
    {
        $this->update(['active' => $status]);
    }
    // Reservation.php

    public function apprenant()
    {
        return $this->belongsTo(Apprenant::class, 'id_apprenant');
    }

}
