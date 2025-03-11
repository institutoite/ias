<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ia extends Model
{
    use HasFactory;
    protected $table = 'ias';

    protected $fillable = [
        'nombre',
        'logo',
        'descripcion',
        'estado'
    ];
    protected $casts = [
        'estado' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
