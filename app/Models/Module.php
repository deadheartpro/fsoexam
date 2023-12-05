<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table = 'Module'; // Replace with your actual table name
    protected $fillable = ['nom', 'filiere_id'];
    
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id');
    }

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class, 'module_id');
    }
}
