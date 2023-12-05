<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $table = 'local'; // Replace with your actual table name
    protected $fillable = ['nom', 'capacite_Ens', 'capacite_Fon', 'capacite_Etu', 'etage', 'bloc_id'];

    public function bloc()
    {
        return $this->belongsTo(Bloc::class, 'bloc_id');
    }

}
