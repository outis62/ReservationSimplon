<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservationcours extends Model
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
    public function apprenant()
    {
        return $this->belongsTo(Apprenant::class, 'id_apprenant');
    }
}
