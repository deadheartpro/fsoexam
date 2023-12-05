<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $table = 'filiere'; // Replace with your actual table name
    protected $fillable = ['nom', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function modules()
    {
        return $this->hasMany(Module::class, 'filiere_id');
    }
}
