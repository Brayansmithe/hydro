<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acheter extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user_acheter',
        'revenu_jour',
        'montan_achat',
        'id_machine_acheter',
    ];
}
