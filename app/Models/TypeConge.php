<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeConge extends Model
{
    use HasFactory;

    protected $table = 'types_conges';

    protected $primaryKey = 'id_type_conge';

    protected $fillable = [
        'nom_type_conge','jours_alloues'
    ];


}
