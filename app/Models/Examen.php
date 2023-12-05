<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $table = 'Examen'; // Replace with your actual table name
    protected $fillable = ['session', 'type', 'date_debut', 'date_fin'];
    
    public function partExams()
    {
        return $this->hasMany(Part_Examen::class, 'examen_id');
    }

}
