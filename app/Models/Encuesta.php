<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    protected $table="encuesta";
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
