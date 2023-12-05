<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
{
    use HasFactory;
    protected $table = 'bloc'; // Replace with your actual table name
    protected $fillable = ['nom'];
    public function locals()
    {
        return $this->hasMany(Local::class, 'bloc_id');
    }
}
