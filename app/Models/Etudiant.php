<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiant'; // Replace with your actual table name
    protected $fillable = ['nom', 'prenom', 'CNE_Massar', 'module_id'];

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }

}
