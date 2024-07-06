<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utilisateur extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'utilisateurs';

    protected $fillable = [
        'code_employe', 'nom', 'prenom', 'mot_de_passe',
    ];

    protected $hidden = [
        'mot_de_passe', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['mot_de_passe'] = bcrypt($password);
    }

    public function getAuthIdentifierName()
    {
        return 'code_employe';
    }
}
