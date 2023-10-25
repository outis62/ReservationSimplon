<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Apprenant extends Authenticatable
{

    use Notifiable, HasFactory;
    protected $guard = 'apprenant';
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'role',
        'password',
        'status',
    ];
    public function updateStatus($status)
    {
        $this->update(['active' => $status]);
    }

}
