<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $table = 'utilisateurs';

    protected $primaryKey = 'id_utilisateur';

    protected $fillable = [
        'code_employe', 'nom', 'prenom', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = bcrypt($password);
    // }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    // public function getAuthIdentifier()
    // {
    //     return $this->code_employe;
    // }

    // public function getAuthPassword()
    // {
    //     return $this->password;
    // }
}
