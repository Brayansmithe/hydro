<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retrait extends Model
{
    use HasFactory;

    protected $fillable = [
        'montan_retrait',
        'id_user_retrait',
        'statut_retrait',
        'moyen_retrait',
        'address_retrait',
    ];
}
