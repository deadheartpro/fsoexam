<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveillance extends Model
{
    use HasFactory;

    protected $table = 'Surveillance'; // Replace with your actual table name
    protected $fillable = ['surveillant_id', 'Part_Examen_id', 'type'];

    public function surveillant()
    {
        return $this->belongsTo(Fonctionnaire::class, 'surveillant_id');
    }

    public function partExamen()
    {
        return $this->belongsTo(PartExamen::class, 'Part_Examen_id');
    }

}
