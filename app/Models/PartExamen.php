<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartExamen extends Model
{
    use HasFactory;
    protected $table = 'Part_Examen'; // Replace with your actual table name
    protected $fillable = ['date_debut', 'heure_debut', 'heure_fin', 'examen_id', 'module_id', 'note'];

    public function examen()
    {
        return $this->belongsTo(Examen::class, 'examen_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
    

}
