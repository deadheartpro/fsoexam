<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonctionnaire extends Model
{
    use HasFactory;
    protected $table = 'fonctionnaires'; // Replace with your actual table name
    protected $fillable = ['nom', 'prenom', 'cin', 'sexe', 'type', 'etat', 'id_service'];
    
    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }

}
