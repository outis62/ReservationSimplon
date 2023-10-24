<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscriptioncours extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'role',
        'status',
    ];
    public function updateStatus($status)
    {
        $this->update(['approuvee' => $status]);
    }
}
