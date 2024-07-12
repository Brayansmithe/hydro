<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
   

    protected $table = 'users'; // Nom de votre table personnalisée

    protected $fillable = [
        'nom', 'telephone', 'motpass', 'number', // Champs fillables
    ];

    protected $hidden = [
        'motpass',
    ];

    // Définir le mot de passe comme password pour l'authentification
    public function getAuthPassword()
    {
        return $this->motpass;
    }
}